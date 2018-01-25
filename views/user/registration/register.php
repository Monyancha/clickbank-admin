<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('user', 'Sign up');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>My</b>Application</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Create a new account</p>
                    
        <?php $form = ActiveForm::begin([
            'id' => 'registration-form',
            'enableAjaxValidation' => true,
            'enableClientValidation' => false,
        ]); ?>

        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'username') ?>

        <?php if ($module->enableGeneratingPassword == false): ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
        <?php endif ?>
        
        <p class="text-right">
            <?= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'btn btn-primary btn-flat']) ?>
        </p>

        <?php ActiveForm::end(); ?>

        <p class="">
            <?= Html::a(Yii::t('user', 'Already registered? Sign in!'), ['/user/security/login']) ?>
        </p>

    </div>

</div>