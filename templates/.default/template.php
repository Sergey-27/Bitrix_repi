<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<div class="article-list">

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
    
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
    
    <a class="article-item article-list__item" 
       href="<?=$arItem["DETAIL_PAGE_URL"]?>" 
       data-anim="anim-3" 
       id="<?=$this->GetEditAreaId($arItem['ID']);?>"
    >
        <div class="article-item__background">
            <?php if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])):  ?>
            <img 
                src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                alt="<?=htmlspecialcharsbx($arItem["NAME"])?>"
            />
            <?php endif; ?>
        </div>
        <div class="article-item__wrapper">
            
            
            <div class="article-item__title"><?=htmlspecialcharsbx($arItem["NAME"])?></div>
            
            
            <div class="article-item__content"><?=htmlspecialcharsbx($arItem["PREVIEW_TEXT"])?></div>
            
        </div>
    </a>
    
<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>