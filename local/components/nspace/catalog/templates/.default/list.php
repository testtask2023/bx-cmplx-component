<?

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @global CMain $APPLICATION
 * @var CBitrixComponent $component
 * @var array $arParams
 * @var array $arResult
 * @var array $arCurSection
 */

?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:catalog.section",
    "main",
    [
        "ACTION_VARIABLE" => "action",
        "ADD_PICT_PROP" => "-",
        "ADD_PROPERTIES_TO_BASKET" => "Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BACKGROUND_IMAGE" => "-",
        "BASKET_URL" => "/personal/basket.php",
        "BROWSER_TITLE" => "-",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COMPATIBLE_MODE" => "Y",
        "DETAIL_URL" => "",
        "DISABLE_INIT_JS_IN_COMPONENT" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_COMPARE" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_SORT_FIELD" => $arParams['ELEMENT_SORT_FIELD'],
        "ELEMENT_SORT_FIELD2" => $arParams['ELEMENT_SORT_FIELD2'],
        "ELEMENT_SORT_ORDER" => $arParams['ELEMENT_SORT_ORDER'],
        "ELEMENT_SORT_ORDER2" => $arParams['ELEMENT_SORT_ORDER2'],
        "ENLARGE_PRODUCT" => "STRICT",
        "FILTER_NAME" => "arrFilter",
        "IBLOCK_ID" => $arParams['IBLOCK_ID'],
        "IBLOCK_TYPE" => $arParams['IBLOCK_TYPE'],
        "INCLUDE_SUBSECTIONS" => "Y",
        "LABEL_PROP" => [],
        "LAZY_LOAD" => "N",
        "LINE_ELEMENT_COUNT" => $arParams['COUNT'],
        "LOAD_ON_SCROLL" => "N",
        "MESSAGE_404" => "",
        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
        "MESS_BTN_BUY" => "Купить",
        "MESS_BTN_DETAIL" => "Подробнее",
        "MESS_BTN_LAZY_LOAD" => "Показать ещё",
        "MESS_BTN_SUBSCRIBE" => "Подписаться",
        "MESS_NOT_AVAILABLE" => "Нет в наличии",
        "MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "OFFERS_LIMIT" => "5",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Товары",
        "PAGE_ELEMENT_COUNT" => "18",
        "PARTIAL_PRODUCT_PROPERTIES" => "N",
        "PRICE_CODE" => ['BASE'],
        "PRICE_VAT_INCLUDE" => "Y",
        "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
        "PRODUCT_ID_VARIABLE" => "id",
        "PRODUCT_PROPS_VARIABLE" => "prop",
        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
        "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
        "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
        "RCM_TYPE" => "personal",
        "SECTION_CODE" => "DEFAULT_SECTION_CODE",
        "SECTION_ID" => "",
        "SECTION_ID_VARIABLE" => "SECTION_ID",
        "SECTION_URL" => "",
        "SECTION_USER_FIELDS" => ["", ""],
        "SEF_MODE" => "N",
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SHOW_ALL_WO_SECTION" => "N",
        "SHOW_FROM_SECTION" => "N",
        "SHOW_PRICE_COUNT" => "1",
        "SHOW_SLIDER" => "Y",
        "SLIDER_INTERVAL" => "3000",
        "SLIDER_PROGRESS" => "N",
        "TEMPLATE_THEME" => "blue",
        "USE_ENHANCED_ECOMMERCE" => "N",
        "USE_MAIN_ELEMENT_SECTION" => "N",
        "USE_PRICE_COUNT" => "N",
        "USE_PRODUCT_QUANTITY" => "N",
    ]
);
?>
