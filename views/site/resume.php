<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Resume';
$this->params['breadcrumbs'][] = $this->title;
?>

<style><
    css >
    .resume {
        margin: 20px;
        font-size: 12px;
        line-height: 19px
    }

    .resume__body {
        margin-top: 25px
    }

    .resume__title {
        font-size: 36px;
        font-weight: 700;
        line-height: 33px
    }

    .resume__block {
        font-size: 15px;
        color: #aeaeae;
        border-bottom: 1px solid #d8d8d8;
        margin-top: 25px;
        margin-bottom: 7px
    }

    .resume__position {
        font-size: 16px;
        font-weight: 700
    }

    .resume__salary {
        font-size: 26px;
        line-height: 26px;
        font-weight: 700
    }

    .resume-profession-roles {
        padding: 0
    }

    .resume-profession-role {
        padding: 0 0 0 25px;
        list-style-type: none
    }

    .resume-profession-role:before {
        content: '— '
    }

    .resume-specialization {
        padding: 0 0 0 25px;
        list-style-type: none
    }

    .resume-specialization:before {
        content: '— '
    }

    .resume-experience {
        margin-top: 20px
    }

    .resume-experience:first-child {
        margin-top: 0
    }

    .resume-experience__company {
        font-size: 16px;
        font-weight: 700
    }

    .resume-experience__position {
        font-size: 16px;
        line-height: 26px
    }

    .resume-education {
        margin-top: 20px
    }

    .resume-education:first-child {
        margin-top: 0
    }

    .resume-education__name {
        font-size: 16px;
        font-weight: 700
    }

    .resume-education__name_small {
        font-weight: inherit;
        font-size: 12px;
        margin-left: 25px
    }

    .resume-certificates {
        margin-top: 20px
    }

    .resume-certificates:first-child {
        margin-top: 0
    }

    .resume-certificates__certificate {
        margin-top: 15px;
        margin-left: 25px;
        list-style-type: none
    }

    .resume-certificates__certificate:first-child {
        margin-top: 0
    }

    .resume-certificates__certificate-item:before {
        content: '— ';
        margin-left: -15px
    }

    .resume-skils {
        margin-top: 20px
    }

    .resume-skils:first-child {
        margin-top: 0
    }

    .resume-skils__item {
        margin-left: 25px
    }

    .resume-additional {
        margin-top: 20px
    }

    .resume-additional:first-child {
        margin-top: 0
    }

    .resume-additional__item {
        margin-left: 25px
    }

    .resume-recomendation {
        margin-top: 20px;
        list-style-type: none
    }

    .resume-recomendation:before {
        content: '— ';
        margin-left: -15px
    }

    .resume-recomendation:first-child {
        margin-top: 0
    }

    .resume-comment {
        margin-top: 20px
    }

    .resume-comment:first-child {
        margin-top: 0
    }

    .resume-topics {
        margin-top: 20px
    }

    .resume-topics:first-child {
        margin-top: 0
    }

    .resume-topics__topic {
        margin-top: 20px;
        margin-left: 25px;
        list-style-type: none
    }

    .resume-topics__topic:first-child {
        margin-top: 0
    }

    .resume-topics__topic:before {
        content: '— ';
        margin-left: -15px
    }

    .resume-subindustry {
        padding: 0 0 0 25px;
        list-style-type: none
    }

    .resume-subindustry:before {
        content: '— '
    }

    .info {
        font-size: 12px;
        color: #aeaeae
    }

    .info-footer {
        font-size: 11px;
        color: #bcbcbc
    }

    .hint {
        font-size: 11px;
        line-height: 15px;
        color: #707070
    }

    <
    /
    css ></style>

<div class="resume"><p class="info-footer">Резюме обновлено 7 июля 2023 в
        15:50</p>
    <p class="resume__body">
    <p class="resume__title">Raximov Bekzod </p>
    <p>Мужчина, 19 лет, родился
        <text>26</text>
        <text>октября</text>
        <text>2003</text>
    </p>
    <br>
    <p>+998 (90) 1277233</p>
    <p>jw.raximov2003@gmail.com<span
                class="info"> — предпочитаемый способ связи</span></p><br>
    <p>Проживает: Ташкент</p>
    <p>Гражданство: Узбекистан, есть разрешение на работу: Узбекистан</p>
    <p class="resume__block">Желаемая должность и зарплата</p>
    <p class="resume__position">Backend developer (PHP Laravel)</p>
    <p><span class="resume__salary">1 000</span> $</p>
    <p>Специализации:</p>
    <ul class="resume-profession-roles">
        <li class="resume-profession-role">Программист, разработчик</li>
    </ul>
    <br>
    <p>
    <p>Занятость: полная занятость</p>
    <p>График работы: полный день</p></p><p>Желательное время в пути до работы:
        не имеет значения</p>
    <p class="resume__block">Опыт работы — 2 года 2 месяца</p>
    <ul>
        <li class="resume-experience"><span class="resume-experience__company">IDEA CONCEPT GROUP</span>
            <p class="info"></p>
            <p class="bloko-form-hint">Октябрь 2022 — настоящее время 10
                месяцев</p>
            <p class="resume-experience__position">Программист PHP</p>
            <p>
                <description>Технологии: PHP Laravel, WebSocket, MySQL, SQL,
                    MongoDB, Интеграция
                </description>
            </p>
        </li>
        <li class="resume-experience"><span class="resume-experience__company">E-Invoice</span>
            <p class="info">Ташкент, e-invoice.uz</p>
            <p class="bloko-form-hint">Июнь 2021 — Сентябрь 2022 1 год 4
                месяца</p>
            <p class="resume-experience__position">Backend (PHP) Developer</p>
            <p>
                <description>Технологии: PHP Laravel, MySQL, SQL, Java Spring Boot, PHP InstantCMS
                </description>
            </p>
        </li>
    </ul>
    <p class="resume__block">Образование</p>
    <ul>
        <li>Неоконченное высшее</li>
        <li class="resume-education"><span
                    class="resume-education__name">TUIT</span>
            <p class="bloko-form-hint">2026</p></li>
        <p>KIF, KIF</p></ul>
    <p class="resume__block">Ключевые навыки</p>
    <ul>
        <li class="resume-skils"><span
                    class="bloko-form-hint">Знание языков</span>
            <ul class="resume-skils__item">
                <li>Узбекский<span class="info"> — Родной</span></li>
                <li>Английский<span class="info"> — A2 — Элементарный</span>
                </li>
                <li>Русский<span class="info"> — A2 — Элементарный</span></li>
            </ul>
        </li>
        <li class="resume-skils"><span class="bloko-form-hint">Навыки</span>
            <p class="resume-skils__item">
                <span>PHP; </span><span>Laravel; </span><span>Yii; </span><span>HTML; </span><span>MySQL; </span><span>JavaScript; </span><span>jQuery; </span><span>CSS; </span><span>Git; </span><span>SQL; </span><span>WebSocket; </span><span>REST API; </span><span>Bootstrap; </span><span>JSON API; </span><span>MongoDB; </span><span>SOLID; </span><span>ООП; </span><span>Redis; </span><span>Nginx; </span><span>Backend</span>
            </p></li>
    </ul>
    </p>
</div>
