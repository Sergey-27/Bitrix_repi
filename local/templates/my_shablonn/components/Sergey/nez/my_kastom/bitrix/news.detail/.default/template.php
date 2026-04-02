<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


 
use Bitrix\Main\Page\Asset;

// Подключаем стили, если папка css лежит в корне сайта
Asset::getInstance()->addCss("/css/common.css");


?> 

<div class="article-card">
    <div class="article-card__title"><?= $arResult["NAME"] ?></div>
    <div class="article-card__date"><?= FormatDate("d M Y", MakeTimeStamp($arResult["DISPLAY_ACTIVE_FROM"])) ?></div>

    <div class="article-card__content">
        <?
        // Блок для вывода картинки
        $imageUrl = ""; // Переменная для URL картинки

        // Предпочтительный вариант: Использовать детальную картинку из инфоблока
        if ($arResult["DETAIL_PICTURE"]["SRC"]) {
            $imageUrl = $arResult["DETAIL_PICTURE"]["SRC"];
        }
        // Если детальной картинки нет, попробуем взять из свойства (если вы его создали)
        elseif (!empty($arResult["PROPERTIES"]["PICTURE_PATH"]["VALUE"])) {
            $imageUrl = $arResult["PROPERTIES"]["PICTURE_PATH"]["VALUE"];
        }
        // Если и этого нет, попробуем взять картинку по фиксированному пути (как вы просили)
        elseif (file_exists($_SERVER["DOCUMENT_ROOT"] . "/images/1.01ec9161.jpg")) {
            $imageUrl = "/images/1.01ec9161.jpg";
        }
        // Если у вас несколько разных картинок, то придется использовать свойство или несколько elseif
        // Например, для второй картинки:
        // elseif (file_exists($_SERVER["DOCUMENT_ROOT"] . "/images/2.jpg")) {
        //     $imageUrl = "/images/2.jpg";
        // }
        ?>

        <? if ($imageUrl): ?>
            <div class="article-card__image sticky">
                <img src="" alt="<?= $arResult["NAME"] ?>" data-object-fit="cover" />
            </div>
        <? endif; ?>

        <div class="article-card__text">
            <div class="block-content" data-anim="anim-3">
                <?= $arResult["DETAIL_TEXT"] ?>
            </div>
            <!-- Ссылка "Назад к новостям" ведет на главную страницу раздела -->
            <a class="article-card__button" href="<?= $arResult["LIST_PAGE_URL"] ?>">Назад к новостям</a>
        </div>
    </div>
</div>