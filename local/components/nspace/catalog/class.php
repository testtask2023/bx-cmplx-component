<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Context;

class Catalog extends \CBitrixComponent
{
    protected $defaultSefPage = 'list';

    protected $defaultPage = 'list';

    protected function setSefDefaultParams()
    {
        $this->defaultUrlTemplates404 = [
            'list' => '',
            'detail' => '#ELEMENT_CODE#/',
        ];
        $this->componentVariables = [
            'ELEMENT_ID',
            'ELEMENT_CODE',
        ];
    }

    protected function setPage()
    {
        $urlTemplates = [];

        if ($this->arParams['SEF_MODE'] === 'Y') {
            $variables = [];

            $urlTemplates = \CComponentEngine::MakeComponentUrlTemplates(
                $this->defaultUrlTemplates404,
                $this->arParams['SEF_URL_TEMPLATES']
            );

            $variableAliases = \CComponentEngine::MakeComponentVariableAliases(
                $this->defaultUrlTemplates404,
                $this->arParams['VARIABLE_ALIASES']
            );

            $this->templatePage = \CComponentEngine::ParseComponentPath(
                $this->arParams['SEF_FOLDER'],
                $urlTemplates,
                $variables
            );

            if (!$this->templatePage) {
                if ($this->arParams['SET_404'] === 'Y') {
                    $folder404 = str_replace('\\', '/', $this->arParams['SEF_FOLDER']);

                    if ($folder404 != '/') {
                        $folder404 = '/'.trim($folder404, "/ \t\n\r\0\x0B")."/";
                    }

                    if (substr($folder404, -1) == '/') {
                        $folder404 .= 'index.php';
                    }

                    if ($folder404 != Context::getCurrent()->getRequest()->getRequestedPage()) {
                        $this->return404();
                    }
                }

                $this->templatePage = $this->defaultSefPage;
            }


            \CComponentEngine::InitComponentVariables(
                $this->templatePage,
                $this->componentVariables,
                $variableAliases,
                $variables
            );
        } else {
            $this->templatePage = $this->defaultPage;
        }

        $this->sefFolder = $this->arParams['SEF_FOLDER'];
        $this->urlTemplates = $urlTemplates;
        $this->variables = $variables;
        $this->variableAliases = $variableAliases;
    }

    private function executeMain()
    {
        $this->setSefDefaultParams();
        $this->setPage();
    }

    public function executeComponent()
    {
        $this->arResult = 'Привет, мир!';
        $this->executeMain();

        $this->includeComponentTemplate($this->templatePage);
    }

    public function return404($notifier = false)
    {
        if (!defined('ERROR_404')) {
            define('ERROR_404', 'Y');
        }

        \CHTTP::SetStatus('404 Not Found');
    }
}
