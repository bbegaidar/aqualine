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
    <p class="p1"><?=Yii::t('app', 'Сафари <br>парки</p>
    <p class="p2">
        <p>Компания «AQUALINE GEMAS» став официальным офисом продаж групп компаний «PolinGroup» теперь может  предложить вам зоопарки нового поколения -  PolinSafariParks.<br> Это уникальные зоопарки-заповедники которые набирают мировую популярность.
В отличие от традиционных зоопарков, зоопарки нового поколения, заповедники дикой природы и сафари-парки позволяют посетителям встретиться с живыми существами, отделенными только стеклянными и акриловыми панелями.<p> Без использования каких-либо железных заграждений. Посетители испытывают более тесную связь с дикой природой. Эти прозрачные поверхности интегрированы со специальными функциями безопасности, которые обеспечивают безопасное и приятное впечатление как для посетителей, так и для диких существ. Мало того, что области дикой природы безопасны, но они также очень просторны и удобны, так как были разработаны с учетом индивидуальных потребностей каждого существа. Поддержание этих естественных сред чрезвычайно важно, и все области дикой природы обеспечивают определенные художественные оформления, озеленение, убежища и действия, которые точно изображают среды обитания и продвигают деятельность и долголетие. Мы искусно разрабатываем эти зоны, чтобы посетители могли получить красивый визуальный опыт. Некоторые из природных парков жизни, предлагающих различные пейзажи и концепции, - это африканская саванна, каньоны в Соединенных Штатах и египетская пустыня.</p> <p> Эти зоопарки нового поколения становятся новым стандартом, заменяя традиционные зоопарки с «железной решеткой» по всему миру. <br><br> В числе наших предложений имеются:<br>
<img src="/img/yel.png" class="yel">    Парки диких кошек;<br>
<img src="/img/yel.png" class="yel">    Тропические дома рептилий;<br>
<img src="/img/yel.png" class="yel">    Парки аллигаторов;<br>
<img src="/img/yel.png" class="yel">    Тропические парки птиц;<br>
<img src="/img/yel.png" class="yel">    Тропические парки бабочек;<br>
<img src="/img/yel.png" class="yel">    WildPark – организованные на территории торговых центров, отелей, парков развлечений и океанариумов. </p>
<p>
<span class="yell"><i><b>Своим клиентам</b></i></span>, заинтересованным в строительстве сафари парков мы готовы предложить следующие виды услуг: <br>
<p class="mmm">
<img src="/img/yel.png" class="yel">    разработка концепции парка;<br>
<img src="/img/yel.png" class="yel">    разработка проекта;<br>
<img src="/img/yel.png" class="yel">    управление строительством;<br>
<img src="/img/yel.png" class="yel">    приобретение живых существ и их адаптация;<br>
<img src="/img/yel.png" class="yel">    сервисное обслуживание;<br>
<img src="/img/yel.png" class="yel">    управление парком. <br></p> </p>

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
