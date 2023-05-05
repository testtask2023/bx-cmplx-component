<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/**
 * @global CMain $APPLICATION
 */
$APPLICATION->SetTitle("test");
?><?
$APPLICATION->IncludeComponent(
    "nspace:catalog",
    "",
    [
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "CATALOG",
        "SECTION_CODE" => "DEFAULT_SECTION_CODE",

        "COUNT" => 2,

        "ELEMENT_SORT_FIELD" => "sort",
        "ELEMENT_SORT_FIELD2" => "id",
        "ELEMENT_SORT_ORDER" => "asc",
        "ELEMENT_SORT_ORDER2" => "desc",

        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "86400",

        "SET_404" => "Y",
        "SEF_MODE" => "Y",
        "SEF_FOLDER" => "/catalog/",
        "SEF_URL_TEMPLATES" => [
            "list" => "",
            "detail" => "#ELEMENT_CODE#/",
        ]
    ]
);
?>
