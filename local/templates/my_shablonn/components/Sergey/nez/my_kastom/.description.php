<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arTemplate = array(
    "NAME" => "Мой шаблон детальной",
    "DESCRIPTION" => "Шаблон для детального просмотра",
    "SORT" => 1,
    "TYPE" => "detail",
);

// Путь к CSS-файлу для детальной страницы
$arTemplate["TEMPLATE_CSS"] = "/style.css"; 

$arTemplateDescription = $arTemplate;
?>