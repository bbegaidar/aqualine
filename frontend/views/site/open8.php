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
    <p class="p1"><?=Yii::t('app', 'тематизация <br>объектов</p>
    <p class="p2">
        <p>Компания «AQUALINE GEMAS» предлагает свои услуги в сфере тематизации действующих объектов, создание тематизированных и стилизованных парков больших и маленьких фигур. Познавательных зон в тематиках живого или подводного мира и многое другое. <p> В соответствии с потребностями клиентов дизайны создаются нашей опытной командой дизайнеров с использованием новейших 3D-моделей и графических программ. Наша команда заботится о том, чтобы подготовить правильный дизайн в соответствии с потребностями, которые точно соответствуют постоянно меняющимся мировым тенденциям в области техники и искусства.</p> <p> При реализации проекта наша команда инженеров полагается на отраслевой опыт, чтобы найти правильное решение. Удовлетворение потребностей клиентов является нашим главным приоритетом наряду с обширными знаниями в области материалов и технологий. </p>
<p>
Получить всю информацию касательно тематизации объектов, вы можете в офисе нашей компании, а также в электронных каталогах.</p>

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
