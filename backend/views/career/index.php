<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CareerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Careers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="career-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Career', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'mobile',
            'email:email',
            'job',
            //'resume',
            //'status',
            //'commant',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
