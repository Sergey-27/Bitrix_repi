<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?=$arResult["TITLE"]?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Ваши CSS-файлы -->
</head>
<body>
<div class="contact-form">
    <? if ($arResult['ERROR_MESSAGE'] != '') : ?>
        <p style="color: red"><? print implode('<br>', $arResult['ERROR_MESSAGE']); ?></p>
    <? elseif ($arResult['OK_MESSAGE'] != '') : ?>
        <p style="color: green"><?=$arResult['OK_MESSAGE'];?></p>
    <? else : ?>
        <div class="contact-form__head">
            <div class="contact-form__head-title">Связаться</div>
            <div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и расчёт цены с учётом ваших требований.</div>
        </div>
        <form class="contact-form__form" action="<?=$APPLICATION->GetCurPage()?>" method="POST">
            <div class="contact-form__form-inputs">
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_name">
                        <div class="input__label-text">Ваше имя*</div>
                        <input class="input__input" type="text" id="medicine_name" name="name" value="<?=htmlspecialchars($arResult['NAME'])?>" required="">
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_company">
                        <div class="input__label-text">Компания/Должность*</div>
                        <input class="input__input" type="text" id="medicine_company" name="company" value="<?=htmlspecialchars($arResult['COMPANY'])?>" required="">
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_email">
                        <div class="input__label-text">Email*</div>
                        <input class="input__input" type="email" id="medicine_email" name="email" value="<?=htmlspecialchars($arResult['EMAIL'])?>" required="">
                        <div class="input__notification">Неверный формат почты</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_phone">
                        <div class="input__label-text">Номер телефона*</div>
                        <input class="input__input" type="tel" id="medicine_phone" name="phone" value="<?=htmlspecialchars($arResult['PHONE'])?>" required="">
                    </label>
                </div>
            </div>
            <div class="contact-form__form-message">
                <div class="input">
                    <label class="input__label" for="medicine_message">
                        <div class="input__label-text">Сообщение</div>
                        <textarea class="input__input" type="text" id="medicine_message" name="message"><?=htmlspecialchars($arResult['MESSAGE'])?></textarea>
                        <div class="input__notification"></div>
                    </label>
                </div>
            </div>
            <div class="contact-form__bottom">
                <div class="contact-form__bottom-policy">Нажимая «Отправить», Вы подтверждаете, что ознакомились, полностью согласны и принимаете условия «Согласия на обработку персональных данных».</div>
                <button class="form-button contact-form__bottom-button" data-success="Отправлено" data-error="Ошибка отправки">
                    <div class="form-button__title">Оставить заявку</div>
                </button>
            </div>
        </form>
    <? endif; ?>
</div>
</body>
</html>