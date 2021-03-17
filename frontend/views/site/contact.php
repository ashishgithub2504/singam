<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
   <div class="main">        
         <div class="row contact-rooo no-margin">
            <div class="container">
               <div class="row">
                   
              
                <div style="padding:20px" class="col-sm-7">
                <h2 >Contact Form</h2> <br>
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'mobile') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model,'service')->dropDownList(Yii::$app->params['services']) ?>
                    <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Comments') ?>
                    <?php 
                      // $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                      //   'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                      // ]);
                    ?>
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="col-sm-5">
                    <div style="margin:50px" class="serv"> 
                        <div class="contact-info">
                  <ul>
                                        <li>
                      <div class="contact-wrap">
                        <div class="contact-icon"> <i class="fa fa-map-marker"></i> </div>
                        <div class="contact-text">
                          <h5 class="contact-title">Address</h5>
                          <p>A 232, Triveni Nagar, Jaipur</p>
                        </div>
                      </div>
                    </li>
                                        <li>
                      <div class="contact-wrap">
                        <div class="contact-icon"> <i class="fa fa-phone"></i> </div>
                        <div class="contact-text">
                          <h5 class="contact-title">Phone</h5>
                          <p>  +91-8559907709</p>
                        </div>
                      </div>
                    </li>
                                        <li>
                      <div class="contact-wrap">
                        <div class="contact-icon"> <i class="fa fa-whatsapp"></i> </div>
                        <div class="contact-text">
                          <h5 class="contact-title">WhatsApp</h5>
                          <p> +91 8559907709</p>
                        </div>
                      </div>
                    </li>
                                        <li>
                      <div class="contact-wrap">
                        <div class="contact-icon"> <i class="fa fa-envelope"></i> </div>
                        <div class="contact-text">
                          <h5 class="contact-title">Email</h5>
                          <p> info@singamsecurity.com <br> singhamsecurities@gmail.com</p>
                        </div>
                      </div>
                    </li>
                                      </ul>              
                </div>
            </div>
                </div>
    
                </div>
            </div>
            
          </div>

          <div style="margin-top:0px;" class="row no-margin">
            <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.2437819223146!2d75.77811795013484!3d26.86399476857121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5e8b757778d%3A0x8d6cc4dbd8401e57!2sSingam%20security%20service!5e0!3m2!1sen!2sin!4v1612953920254!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
        </div>
    
         
    </div>