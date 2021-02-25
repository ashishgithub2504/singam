<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ContactsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'mobile') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'job') ?>

    <?php // echo $form->field($model, 'resume') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'commant') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
