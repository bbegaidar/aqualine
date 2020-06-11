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
    <p class="p1"><?=Yii::t('app', 'SPA <br>комплексы</p>
    <p class="p2">
       <p>В современном мире динамика жизни имеет стремительный темп, но зачастую любому человеку нужен перерыв, и где как не SPA можно обрести гармонию и расслабиться. На сегодняшний день SPA комплексы являются одним из наиболее востребованных и прибыльных видов бизнеса имеющий огромный спрос. Наличие SPA в отеле стал одним из критериев присвоения звездности и подтверждением его статуса. <p>Компания «AQUALINE GEMAS» готова предложить своим клиентам широкий спектр различных решений по организации SPA комплексов. При разработке проектов SPA мы уделяем особое внимание эффективному зонированию пространства, и функциональному наполнению.</p> <br>
<p>Сотрудничество с мировыми компаниями позволяет получить бесценный опыт и знания, применяемые на практике, что обеспечивает успешность проекта и профессионализм на любом этапе.</p> <br>
<img src="/img/yel.png" class="yel">    Классические турецкие хамамы с сохранением исторических особенностей помещений; <br>
<img src="/img/yel.png" class="yel">    Различные предложения по саунам (классическая финская сауна с нестандартными решениями в части отделки, био и инфракрасные сауны, скифские сауны, травяные и солевые сауны, русские бани, Сауны на открытом воздухе, тепидрариум, кальдарий, лакония, расул)<br>
<img src="/img/yel.png" class="yel">    Паровые и арома комнаты;<br>
<img src="/img/yel.png" class="yel">    Снежные комнаты и ледовые гроты; <br>
<img src="/img/yel.png" class="yel">    Душевые гроты, шоковые души и души впечатлений;<br>
<img src="/img/yel.png" class="yel">    Термальные бассейны;<br>
<img src="/img/yel.png" class="yel">    Vitality Pool и гидромассажные бассейны;<br>
<img src="/img/yel.png" class="yel">    Flotation Pool и Kneipp foot pool <br>
<img src="/img/yel.png" class="yel">    Массажные  и бьюти комнаты<br>
<img src="/img/yel.png" class="yel">    Комнаты для медитации, солевой, песочной и винной терапии и многое другое. <br>

<p><span class="yell"><i><b>Своим клиентам</b></i></span>, заинтересованным в строительстве SPA комплексов мы готовы предложить следующие виды услуг: <br>
<p class="mmm">
<img src="/img/yel.png" class="yel">    Эскизный проект помещения SPA с оптимальным вариантом зонирования всего пространства;<br>
<img src="/img/yel.png" class="yel">    Предоставление полного коммерческого предложения на объекты SPA согласно эскизного проекта; <br>
<img src="/img/yel.png" class="yel">    Доставка и таможенная очистка оборудования и материалов;<br>
<img src="/img/yel.png" class="yel">    Монтаж оборудование и облицовочные работы;<br>
<img src="/img/yel.png" class="yel">    Пуско-наладочные работы и запуск<br>
<img src="/img/yel.png" class="yel">    Сервисное обслуживание оборудование и обучение специалистов заказчика. </p> </p>')?>

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
