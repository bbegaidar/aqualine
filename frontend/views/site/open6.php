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
    <p class="p1"><?=Yii::t('app', 'Аквариумы</p>
    <p class="p2">
        <p>Компания «AQUALINE GEMAS» став официальным офисом продаж групп компаний «PolinGroup» теперь может предложить вам новый и уникальный  вид бизнеса, не имеющий аналогов на территории Средней Азии – Polin Aquariums. <p>
Polin Aquariums - единственная компания в регионе и одна из немногих в мире, с которой можно построить общественные океанариумы, террариумы и зоологические экспонаты от концепции до завершения. Опытный персонал Polin Aquarium включает в себя; Архитекторов, дизайнеров интерьеров, зоологов, морских биологов, инженеров-механиков, художников и скульпторов.</p><p>
Представьте себе ваше путешествие по океанариуму вашей мечты. Наши дизайнеры и архитекторы могут воплотить вашу концепцию в реальность. В сотрудничестве с нашими специалистами по планированию, оценке и инженерами мы можем быстро повысить ценность проекта. Наши глубокие знания в области строительства специальных аквариумов и зоопарков означают, что каждый проект гарантированно будет уникальным и идеально подходящим для жителей.</p><p>Мы предлагаем: <br>
<img src="/img/yel.png" class="yel">    Аквариумы с китами;<br>
<img src="/img/yel.png" class="yel">    Аквариумы с акулами;<br>
<img src="/img/yel.png" class="yel">    Тоннельные аквариумы;<br>
<img src="/img/yel.png" class="yel">    Полуоткрытые аквариумы;<br>
<img src="/img/yel.png" class="yel">    Цилиндрические аквариумы;<br>
<img src="/img/yel.png" class="yel">    Контактные бассейны с морскими животными;<br>
<img src="/img/yel.png" class="yel">    Учебные аквариумы;<br>
<img src="/img/yel.png" class="yel">    Аквариумы кейдж-дайвинг;<br>
<img src="/img/yel.png" class="yel">    Бассейны для плавания со скатами и дельфинами;<br>
<img src="/img/yel.png" class="yel">    Бассейны с пингвинами и арктическими птицами;<br>
<img src="/img/yel.png" class="yel">    Водные горки внутри аквариумов;<br>
<img src="/img/yel.png" class="yel">    Внутренний декор аквариумов;<br>
<img src="/img/yel.png" class="yel">    Тематизация здания океанариума в стиле бренда и морской тематики;<br>
<img src="/img/yel.png" class="yel">    Организация территории фуд-корта;<br>
<img src="/img/yel.png" class="yel">    Сувенирных магазинов;<br>
<img src="/img/yel.png" class="yel">    А также фотозон и ХD кинотеатров и VR систем<br></p>
<p>
<span class="yell"><i><b>Своим клиентам</b></i></span>, заинтересованным в строительстве океанариумов мы готовы предложить следующие виды услуг: <br>
<p class="mmm">
<img src="/img/yel.png" class="yel">    разработка концепции океанариума на основании проведенных маркетинговых и статистических исследований (изучение региона строительства, численность населения, стоимостные показатели и т.д)<br>
<img src="/img/yel.png" class="yel">    комплексная разработка проекта здания океанариума;<br>
<img src="/img/yel.png" class="yel">    управление строительством;<br>
<img src="/img/yel.png" class="yel">    производство и монтаж аквариумов и бассейнов;<br>
<img src="/img/yel.png" class="yel">    монтаж технологического оборудования систем поддержки жизни аквариумов;<br>
<img src="/img/yel.png" class="yel">    искусственная среда и декор;<br>
<img src="/img/yel.png" class="yel">    заполнение аквариумов водой и подготовка к выпуску морских животных;<br>
<img src="/img/yel.png" class="yel">    приобретение морских животных;<br>
<img src="/img/yel.png" class="yel">    водная подготовка животных и акклиматизация;<br>
<img src="/img/yel.png" class="yel">    сервисное обслуживание;<br>
<img src="/img/yel.png" class="yel">    услуги управления.<br></p> </p>

</p>')?>
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
