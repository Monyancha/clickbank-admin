<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('user', 'Recover your password');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>My</b>Application</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Recover your password</p>

        <?php $form = ActiveForm::begin([
            'id' => 'password-recovery-form',
            'enableAjaxValidation' => true,
            'enableClientValidation' => false,
        ]); ?>

        <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

        <p class="text-right">
            <?= Html::submitButton(Yii::t('user', 'Continue'), ['class' => 'btn btn-primary btn-flat']) ?><br>
        </p>

        <?php ActiveForm::end(); ?>
    </div>
</div>