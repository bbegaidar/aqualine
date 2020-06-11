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
<div class="black_loader">
    <img src="/img/load.gif">
</div>
<div class="modal-content1"><?=Yii::t('app', '<form><p class="modalp"><b class="modalb">ОСТАВЬТЕ ЗАЯВКУ</b><br>
и получите консультацию нашего специалиста </p>
   <input type="text" name="name" placeholder="Ваше имя" class="inputmodal">
   <input type="text" name="email" placeholder="Ваш email" class="inputmodal"><br>
   <button class="modalbut submitModal"><b>Оставить заявку</b></button></form>')?>

    </div>
    <div class="fancyform2">
                    <p><?=Yii::t('app', 'Спасибо , ваша заявка принята!')?></p>
                </div>

    <footer>
        <hr>
        <img src="/img/mmaint.png" class="foot">
    </footer>
</div>
</body>
</html>

<script src="/js/jquery-2.1.3.min.js"></script>
<script src="/js/script.js"></script>
<script>
$('body').on('click', '.submitModal', function(e) {
  e.preventDefault()
  // var modal = $('.fancybox-container');
  var form = $(this).parents('form')
  $.ajax({
    type: 'POST',
    url: '/mail/mail.php',
    data: $(form).serialize(),
    beforeSend: function () {
      $('.black_loader').show();
      // $(modal).hide();
    },
    success: function (data) {
      $('.black_loader').hide();
      // $('#thank_modal').modal();
    }
  })
})
</script>
