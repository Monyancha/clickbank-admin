<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dmstr\widgets\Alert;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign In';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>My</b>Application</a>
    </div>

    <?= Alert::widget() ?>

    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            // 'enableAjaxValidation' => true,
            'enableClientValidation' => true,
            'validateOnBlur' => false,
            'validateOnType' => false,
            'validateOnChange' => false,
        ]) ?>

        <?= $form
            ->field($model, 'login', $fieldOptions1)
            ->label('Username or Email Address')
            ->textInput() ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label(Yii::t('user', 'Password')
            . ($module->enablePasswordRecovery ?
                ' (' . Html::a(
                    Yii::t('user', 'Forgot password?'),
                    ['/user/recovery/request'],
                    ['tabindex' => '5']
                )
                . ')' : ''))
            ->passwordInput() ?>

        <div class="row">
            <div class="col-xs-8">
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>


        <?php ActiveForm::end(); ?>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <!-- <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in
                using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign
                in using Google+</a> -->
        </div>
        <!-- /.social-auth-links -->

        <!-- <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a> -->
        
        <?php if ($module->enableConfirmation): ?>
            <p class="">
                <?= Html::a(Yii::t('user', 'Didn\'t receive confirmation message?'), ['/user/registration/resend']) ?>
            </p>
        <?php endif ?>
        <?php if ($module->enableRegistration): ?>
            <p class="">
                <?= Html::a(Yii::t('user', 'Don\'t have an account? Sign up!'), ['/user/registration/register']) ?>
            </p>
        <?php endif ?>
    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
