<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

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
    "bitrix:catalog.element",
    "main",
    [
        "COMPONENT_TEMPLATE" => ".default",
        "IBLOCK_TYPE" => "strategic_communications",
        "IBLOCK_ID" => "5",
        "ELEMENT_ID" => "",
        "ELEMENT_CODE" => $component->variables['ELEMENT_CODE'],
        "SECTION_ID" => "",
        "SECTION_CODE" => $arParams["SECTION_CODE"],
        "ADDITIONAL_FILTER_NAME" => "elementFilter",
        "SHOW_DEACTIVATED" => "N",
        "OFFERS_LIMIT" => "0",
        "BACKGROUND_IMAGE" => "-",
        "TEMPLATE_THEME" => "blue",
        "PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
        "PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
        "ADD_PICT_PROP" => "-",
        "LABEL_PROP" => [
        ],
        "DISPLAY_NAME" => "Y",
        "IMAGE_RESOLUTION" => "16by9",
        "SHOW_SLIDER" => "N",
        "DETAIL_PICTURE_MODE" => [
            0 => "POPUP",
            1 => "MAGNIFIER",
        ],
        "ADD_DETAIL_TO_SLIDER" => "N",
        "DISPLAY_PREVIEW_TEXT_MODE" => "E",
        "MESS_BTN_BUY" => "Купить",
        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
        "MESS_BTN_SUBSCRIBE" => "Подписаться",
        "MESS_NOT_AVAILABLE" => "Нет в наличии",
        "MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
        "USE_VOTE_RATING" => "N",
        "USE_COMMENTS" => "N",
        "BRAND_USE" => "N",
        "MESS_PRICE_RANGES_TITLE" => "Цены",
        "MESS_DESCRIPTION_TAB" => "Описание",
        "MESS_PROPERTIES_TAB" => "Характеристики",
        "MESS_COMMENTS_TAB" => "Комментарии",
        "SECTION_URL" => "",
        "DETAIL_URL" => "",
        "SECTION_ID_VARIABLE" => "SECTION_ID",
        "CHECK_SECTION_ID_VARIABLE" => "N",
        "SEF_MODE" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_GROUPS" => "Y",
        "SET_TITLE" => "Y",
        "SET_CANONICAL_URL" => "N",
        "SET_BROWSER_TITLE" => "Y",
        "BROWSER_TITLE" => "-",
        "SET_META_KEYWORDS" => "Y",
        "META_KEYWORDS" => "-",
        "SET_META_DESCRIPTION" => "Y",
        "META_DESCRIPTION" => "-",
        "SET_LAST_MODIFIED" => "N",
        "USE_MAIN_ELEMENT_SECTION" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "SHOW_SKU_DESCRIPTION" => "N",
        "ACTION_VARIABLE" => "action",
        "PRODUCT_ID_VARIABLE" => "id",
        "DISPLAY_COMPARE" => "N",
        "PRICE_CODE" => $arParams['PRICE_CODE'],
        "USE_PRICE_COUNT" => "N",
        "SHOW_PRICE_COUNT" => "1",
        "PRICE_VAT_INCLUDE" => "Y",
        "PRICE_VAT_SHOW_VALUE" => "N",
        "USE_RATIO_IN_RANGES" => "Y",
        "BASKET_URL" => "/personal/basket.php",
        "USE_PRODUCT_QUANTITY" => "N",
        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
        "ADD_PROPERTIES_TO_BASKET" => "Y",
        "PRODUCT_PROPS_VARIABLE" => "prop",
        "PARTIAL_PRODUCT_PROPERTIES" => "N",
        "LINK_IBLOCK_TYPE" => "",
        "LINK_IBLOCK_ID" => "",
        "LINK_PROPERTY_SID" => "",
        "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
        "USE_ENHANCED_ECOMMERCE" => "N",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "COMPATIBLE_MODE" => "Y",
        "USE_ELEMENT_COUNTER" => "Y",
        "DISABLE_INIT_JS_IN_COMPONENT" => "N"
    ],
    false
);
?>
