<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Career';
$this->params['breadcrumbs'][] = $this->title;
?>
   <div class="main">        
        <div class="row no-margin">
            <img src="/images/The-RIGHT-Way-to-Apply-for-a-Job-by-Email_1_1600x450.jpg">    
        </div>
    
          <div class="row contact-rooo no-margin">
            <div class="container">
               <div class="row">
                <div style="padding:20px" class="col-sm-7">
                <h2 >Apply For Job</h2> <br>
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'mobile') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'resume')->fileInput()->label('Upload Resume'); ?>
                    <?= $form->field($model, 'job')->textarea(['rows' => 6])->label('Comments') ?>
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="col-sm-5">
                    <div style="margin:50px" class="serv"> 
                        <img src="/images/image.webp">
                    </div>
                </div>
    
                </div>
            </div>
            
          </div>
    </div>