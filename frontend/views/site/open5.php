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
    <p class="p1"><?=Yii::t('app', 'Игровые <br>технологии</p>
    <p class="p2">
        <p>Компания «AQUALINE GEMAS» предлагает ощутить новую реальность, выходящую за пределы воображения!<br>
Совместно с мировым лидером в индустрии аттракционов для аквапарков «Polin Waterparks», мы с гордостью представляем игровую продукцию подразделения компании PolinGameTechnologies, которое интегрирует новейшие технологические разработки, игры и интерактивные решения в развлекательную среду аквапарков, предлагая их посетителям новые и уникальные впечатления, ранее неизвестные на водных аттракционах.
Это значительно расширяет аудиторию посетителей аквапарков.<br><p>Компания «Polin Waterparks» уверенно работает в сфере аквапарков вот уже более 40 лет, и теперь, благодаря нашему опыту и знаниям, клиенты могут извлечь выгоду, используя наши новейшие разработки – уникальные игры, интерактивные продукты и комплексные технологии: <br>
<img src="/img/yel.png" class="yel">    Splash Cabin - уникальная кабина с брызгами;<br>
<img src="/img/yel.png" class="yel">    Slide”n Score;<br>
<img src="/img/yel.png" class="yel">    VR технологии; <br>
<img src="/img/yel.png" class="yel">    Аттракцион Splash Cinema;<br>
<img src="/img/yel.png" class="yel">    Интерактивный аттракцион Dark Rivers;<br></p>
<p>С этими и многими другими предложениями вы можете ознакомиться из нашего каталога и открыть для себя новые доступные захватывающие решения, которые заставят посетителей возвращаться в аквапарк снова и снова. Вы будете удивлены богатством ассортимента.</p>


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
