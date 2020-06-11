<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Aqualine</title>
    <link rel="shortcut icon" href="/img/znachok.png">
    <link rel="stylesheet" href="/css/open.css">
</head>
<?php
    $lang = Yii::$app->language;
    $ru_active = '';
    $en_active = '';
    $link = (string) Yii::$app->request->getUrl();
    $check = substr($link, 0, 3);
    $ru_link = '/ru' . $link;
    $en_link = '/en' . $link;
    if ($check == "/ru" || $check == "/ch" || $check == "/en") {
        $sm_link = mb_substr($link, 3);
        $ru_link = '/ru' . $sm_link;
        $en_link = '/en' . $sm_link;
    }
?>
<body>

    <div class="logo">
        <img src="/img/logom.png" class="logoimg">
        <img src="/img/phone.png" class="phone">
        <a href="tel:+7 701 226 83 66" class="logop">+7 701 226 83 66</a>
        <select onchange="location = this.value;">
            <option value="<?=$ru_link?>" <?=Yii::$app->language == 'ru' ? 'selected' : ''?>>RU</option>
            <option value="<?=$en_link?>" <?=Yii::$app->language == 'en' ? 'selected' : ''?>>EN</option>
        </select>
    </div>
<div class="open">
    <a href="/site/index"><img src="/img/vlevoo.png" class="vlevo"></a>
    <p class="nazad"><?=Yii::t('app', 'назад')?></p>
    <hr>
    <img src="/img/1.png" class="img1">
    <p class="p1"><?=Yii::t('app', 'Фонтаны</p>
    <p class="p2">
        <p>Компания «AQUALINE GEMAS» осуществляет строительство фонтанов любой сложности, которые становятся не просто одним из водных сооружений, а переходят в ранг достопримечательностей.<br><p>Мы являемся официальным дистрибьютором компании   «AQUATRONIC» на территории стран СНГ и готовы реализовать любое решение по созданию фонтанов. Собственное производство всего перечня оборудования позволяет решать любые задачи. Все оборудование проходит контрольное испытание и наши заказчики могут быть уверены в совершенстве итогового результата. </p> <br> <p>Уникальный проектно-конструкторский отдел и квалифицированный инженерный состав гарантирует успех проекта. Наша компания предлагает: <br><img src="/img/yel.png" class="yel">    Классические фонтаны;<br><img src="/img/yel.png" class="yel">    Светомузыкальные и поющие фонтаны;<br><img src="/img/yel.png" class="yel">    Сухие и пешеходные фонтаны;<br><img src="/img/yel.png" class="yel">    Городские фонтаны любой площади;<br><img src="/img/yel.png" class="yel">    Туманные фонтаны;<br><img src="/img/yel.png" class="yel">    Огненные фонтаны и многое другое.<br></p>
<p>
<span class="yell"><i><b>Своим клиентам</b></i></span>, заинтересованным в строительстве фонтанов мы готовы предложить следующие виды услуг:<br>
<p class="mmm">
<img src="/img/yel.png" class="yel">    Разработка проекта с последующим предоставлением 3D визуализации и видео;<br>
<img src="/img/yel.png" class="yel">    Подбор оптимальных моделей оборудования (фонтанные насадки, насосное оборудование, системы программирования)<br>
<img src="/img/yel.png" class="yel">    Предоставление полного коммерческого предложения;<br>
<img src="/img/yel.png" class="yel">    Доставка с учетом таможенной очистки<br>
<img src="/img/yel.png" class="yel">    Проведение монтажных работ<br>
<img src="/img/yel.png" class="yel">    Пуско-наладочные работы<br>
<img src="/img/yel.png" class="yel">    Сервисное обслуживание и обучение персонала заказчика.</p> </p>')?>

</p>
    </p>
   <hr>
   <a href="/site/consultation"><button><?=Yii::t('app', 'ЗАКАЗАТЬ')?></button></a>
    <footer>
          <hr>
           <img src="/img/mmaint.png" class="foot">
    </footer>
</div>
</body>
</html>
