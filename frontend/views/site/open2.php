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
    <p class="p1"><?=Yii::t('app', 'Бассейны и <br>волновые парки</p>
    <p>Компания «AQUALINE GEMAS» является официальным дистрибьютором крупнейших фабрик таких как GEMAS, BETSAN, производящих оборудование и материалы для бассейнов соответствующих европейским стандартам качества, а также осуществляет прямые поставки оборудования таких производителей как ASTRAL POOL, CEPEX, SERA POOL,  KYK и многих других.<br><p>
На сегодняшний день наша компания успешно реализовала свыше 200 проектов бассейнов различного назначения. Не важно будет ли ваш бассейн домашним и уютным, либо общественным с замысловатой формой, важна только кристальная чистота воды, экологичность используемых материалов и качество выполняемых работ. Мы реализуем проекты бассейнов любой сложности, используя только качественное оборудование от лидирующих мировых производителей сохраняя приемлемые цены благодаря прямой работе с фабриками.</p><br> <p>Наш опыт и наличие поставок инновационного оборудования позволяет осуществлять проекты бассейнов следующих видов: <br>
<img src="/img/yel.png" class="yel">    Частные бассейны;<br>
<img src="/img/yel.png" class="yel">    детские бассейны любого назначения;<br>
<img src="/img/yel.png" class="yel">    полуспортивные и спортивные бассейны соответсвующие стандартам FINA. <br>
<img src="/img/yel.png" class="yel">    Общественные бассейны любой площади;<br>
<img src="/img/yel.png" class="yel">    Волновые бассейны различных видов;<br>
<img src="/img/yel.png" class="yel">    Бассейны для серфинга;<br>
<img src="/img/yel.png" class="yel">    Бассейны с морской водой;<br>
<img src="/img/yel.png" class="yel">    Бассейны «Лагуна» с зоной аквабара, а также с зоной аэро-гидромассажа; <br>
<img src="/img/yel.png" class="yel">    Ленивые реки – «LAZY RIVER»;<br>
<img src="/img/yel.png" class="yel">    Быстрые реки и реки с зоной Рафтинг; </p><br>
<p>
<span class="yell"><i><b>Своим клиентам</b></i></span>, заинтересованным в строительстве бассейнов мы готовы предложить следующие виды услуг: <br>
<p class="mmm">
<img src="/img/yel.png" class="yel">    Разработка эскизной визуализации проекта будущего бассейна;<br>
<img src="/img/yel.png" class="yel">    Составление детального коммерческого предложения с подбором наиболее оптимального оборудования;<br>
<img src="/img/yel.png" class="yel">    Предоставление полного технического задания;<br>
<img src="/img/yel.png" class="yel">    Выполнение монтажа всего перечня оборудования; <br>
<img src="/img/yel.png" class="yel">    Выполнение гидроизоляционных и облицовочных работ; <br>
<img src="/img/yel.png" class="yel">    Пуско-наладочные работы, с учетом первичной дезинфекции воды бассейна<br>
<img src="/img/yel.png" class="yel">    Сервисное обслуживание оборудование / проведение обучения персонала заказчика.</p> </p>')?>

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
