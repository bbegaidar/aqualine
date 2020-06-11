<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Portfolio */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $listCategory = ['1' => 'Аквапарк', '2' => 'Spray zone', '3' => 'Игровые технологии', '4' => 'SPA комплексы', '5' => 'Фонтаны', '6' => 'Бассейны и волновые парки', '7' => 'Аквариумы', '8' => 'Сафари парк', '9' => 'Тематизация обьектов']  ?>

<div class="portfolio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList($listCategory,['prompt'=>'Select...']) ?>

    <?= $form->field($model, 'name_rus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_eng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'location_rus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_eng')->textInput(['maxlength' => true]) ?>
    
    <div id="images"></div>
    <?= $form->field($model, 'photos[]')->fileInput(['multiple' => true, 'accept' => 'image/*','onchange' => 'readUrls(this);']) ?>    
    <div id="photos_val" data-id='<?=$model->images?>'></div>

    <?= $form->field($model, 'logo_img')->fileInput(['accept' => 'image/*']) ?>

    <?= $form->field($model, 'is_active')->checkbox(['id' => 'is_active'])?> 
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
$(document).ready(function () {
    let container = $('#images');
    let photos = $('#photos_val').data("id");
    console.log(photos)
    if (photos.length > 0) {
        for (let i=0; i<photos.length; i++) {
            for (let index = 0; index < photos[i].length; index++) {
                container.prepend(`<img src='${photos[i][index]}' style='width: 250px; height: 250px' />`)               
                break;
            }            
        }
    }
});
function readUrls(input) {
    // Multiple images preview in browser
    let container = $('#images');
    container.empty();   
    console.log(container)
    if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(event) {
                container.prepend(`<img id='${'img_'+i}' src='${event.target.result}' style='width: 250px; height: 250px' />`)
            }
            reader.readAsDataURL(input.files[i]);
        }
    }    

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });            
}
</script>
