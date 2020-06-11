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
   <div class="op">
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
    <p class="p1"><?=Yii::t('app', 'Аквапарки<br>и спрей парки')?></p>
    <p class="p2"><?=Yii::t('app', '<p>Компания «AQUALINE GEMAS» является официальным офисом продаж на территории СНГ всемирно-известной компании «Polin Waterparks», -и может реализовать любой проект аквапарка. <p> У нас вы найдете самый широкий ассортимент водных горок для детской и взрослой категории посетителей. Отличительной особенностью наших горок является технология их производства. </p> <p> Мы единственная компания которая предлагает всю линейку водных горок изготовленную по технологии RTM включая крупногабаритные элементы, благодаря которой вы получите: <br>
<img src="/img/yel.png" class="yel">    глянцевую поверхность с обеих сторон горки;<br>
<img src="/img/yel.png" class="yel">    стойкий цвет не подверженный выгоранию на солнце; <br>
<img src="/img/yel.png" class="yel"> стойкость к механическим повреждениям в том числе к царапинам от купальных костюмов;<br>
<img src="/img/yel.png" class="yel"> более прочные горки при меньшем весе;<br>
<img src="/img/yel.png" class="yel">  возможность применения эффектов естественного света, узоров либо полностью прозрачные варианты.</p><br>
<p>
<span class="yell"><i><b>Своим клиентам</b></i></span>, заинтересованным в строительстве аквапарков мы готовы предложить следующие виды услуг:<br><p class="mmm">
<img src="/img/yel.png" class="yel">    Разработка эскизного проекта аквапарка согласно выделенной территории с наиболее оптимальной расстановкой всех составляющих (водные аттракционы, бассейны, зоны входа, раздевалок и т.д) с последующим предоставлением 3D видео.<br>
<img src="/img/yel.png" class="yel">     По итогам утверждения эскизного проекта предоставляем полное коммерческое предложение, которое включает стоимость водных горок и водных аттракционов, оборудование бассейнов с учетом облицовочной части, включая монтажные работы и  расходы по доставке и таможенной очистке груза.<br>
<img src="/img/yel.png" class="yel">    Осуществляем заказ на изготовление водных аттракционов;<br>
<img src="/img/yel.png" class="yel">     Организовываем доставку всего объема товара на объект заказчика включая таможенную очистку груза;<br>
<img src="/img/yel.png" class="yel">    Выполняем монтаж водных аттракционов и всего перечня оборудования для водных горок и бассейнов, включая облицовочные работы в бассейнах;<br>
<img src="/img/yel.png" class="yel">     Производим пуско-наладочные работы всего перечня оборудования и запуск в эксплуатацию;<br>
<img src="/img/yel.png" class="yel">    Проводим сервисное обслуживание и обучение персонала заказчика.</p></p>
<br>

<p class="wip">Детские  SPRAY Парки.</p>
<p>Компания «AQUALINE GEMAS» рада предложить своим клиентам детские интерактивные водные площадки «SPRAY ZONE». Они идеально сочетают в себе незабываемые детские развлечения с максимальной безопасностью. <br>Глубина бассейнов Spray Zone составляет не более 5 см, нескользящая поверхность обеспечит безлопастное движение детей во время игр. Огромным плюсом является тот факт, что аттракционы SPRAY ACTION можно разместить на территории любой площадки. Обширный выбор моделей игрушек не оставит детей равнодушными.<br>Все элементы «SPRAY ACTION» имеют яркий дизайн и интересные формы обеспечивая часы веселья для маленьких гостей.</p><br>
<p>
<span class="yell"><i><b>Своим клиентам</b></i></span>, заинтересованным в строительстве SPRAY парков мы готовы предложить следующие виды услуг:<br>
<p class="mmm">
<img src="/img/yel.png" class="yel">     разработка эскизного проекта «SPRAY ZONE»;<br>
<img src="/img/yel.png" class="yel">    Подбор наиболее оптимальных моделей аттракционов SPRAY ACTION;<br>
<img src="/img/yel.png" class="yel">     Предоставление полного коммерческого предложение;<br>
<img src="/img/yel.png" class="yel">    Осуществление доставки товара и выполнение монтажных работ;<br>
<img src="/img/yel.png" class="yel">   Пуско-наладочные работы;<br>
<img src="/img/yel.png" class="yel">    Сервисное обслуживание оборудования и обучение специалистов заказчика.</p> </p>
</p>')?></p>
   <hr>
    <a href="/site/consultation"><button><?=Yii::t('app', 'ЗАКАЗАТЬ')?></button></a>
    <footer>
          <hr>
           <img src="/img/mmaint.png" class="foot">
    </footer>
</div>
</div>
</body>
</html>
