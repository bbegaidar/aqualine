<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="../js/tinymce/tinymce.min.js"></script>
<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_rus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_eng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_rus')->textarea(['rows' => 6, 'class' => 'tinymce_pl_table']) ?>

    <?= $form->field($model, 'body_eng')->textarea(['rows' => 6, 'class' => 'tinymce_pl_table']) ?>
        
    <div class="row">
        <?php if ($model->advantage_rus != null): $model->advantage_eng = json_decode($model->advantage_eng); $model->advantage_rus = json_decode($model->advantage_rus); ?>
            <div class="col-6">
                <?= $form->field($model, 'advantage_rus[]')->textInput(['maxlength' => true, 'value' => $model->advantage_rus[0]]) ?>
                <?= $form->field($model, 'advantage_rus[]')->textInput(['maxlength' => true, 'value' => $model->advantage_rus[1]]) ?>
                <?= $form->field($model, 'advantage_rus[]')->textInput(['maxlength' => true, 'value' => $model->advantage_rus[2]]) ?>
                <?= $form->field($model, 'advantage_rus[]')->textInput(['maxlength' => true, 'value' => $model->advantage_rus[3]]) ?>
                <?= $form->field($model, 'advantage_rus[]')->textInput(['maxlength' => true, 'value' => $model->advantage_rus[4]]) ?>
            </div>
            <div class="col-6">
                <?= $form->field($model, 'advantage_eng[]')->textInput(['maxlength' => true, 'value' => $model->advantage_eng[0]]) ?>
                <?= $form->field($model, 'advantage_eng[]')->textInput(['maxlength' => true, 'value' => $model->advantage_eng[1]]) ?>
                <?= $form->field($model, 'advantage_eng[]')->textInput(['maxlength' => true, 'value' => $model->advantage_eng[2]]) ?>
                <?= $form->field($model, 'advantage_eng[]')->textInput(['maxlength' => true, 'value' => $model->advantage_eng[3]]) ?>
                <?= $form->field($model, 'advantage_eng[]')->textInput(['maxlength' => true, 'value' => $model->advantage_eng[4]]) ?>
            </div>
        <?php else: ?>
                <div class="col-6">
                <?= $form->field($model, 'advantage_rus[]')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'advantage_rus[]')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'advantage_rus[]')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'advantage_rus[]')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'advantage_rus[]')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-6">
                <?= $form->field($model, 'advantage_eng[]')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'advantage_eng[]')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'advantage_eng[]')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'advantage_eng[]')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'advantage_eng[]')->textInput(['maxlength' => true]) ?>
            </div>
        <?php endif; ?>
    </div>
    
    <?= $form->field($model, 'is_active')->checkbox(['id' => 'is_active'])?> 
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

<script>
    tinymce.init({
        selector: '.tinymce_pl_table',
        plugins: 'preview fullpage paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen codesample table hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help colorpicker textcolor link ',
        imagetools_cors_hosts: ['picsum.photos'],
        file_browser_callback_types: 'file image media',
        menubar: 'file table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | emoticons | fullscreen  preview save | table | code | link',
        autosave_ask_before_unload: true,
        autosave_interval: "30s",
        autosave_prefix: "{path}{query}-{id}-",
        autosave_restore_when_empty: false,
        autosave_retention: "2m",
        importcss_append: false,
        height: 400,        
        templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
            { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
            { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_drawer: 'sliding',
        contextmenu: "textcolor colorpicker table",
	});
</script>

</div>
