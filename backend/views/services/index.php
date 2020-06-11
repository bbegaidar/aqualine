<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\grid\ActionColumn;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Услуги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_rus',
            'name_eng',
            'body_rus:ntext',
            'body_eng:ntext',
            //'advantage_rus:ntext',
            //'advantage_eng:ntext',

            ['class' => ActionColumn::className(),'template'=>'{view}{update}' ]
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
