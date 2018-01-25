<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = Yii::t('user', 'Reset your password');
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>My</b>Application</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Reset your password</p>

        <?php $form = ActiveForm::begin([
            'id' => 'password-recovery-form',
            'enableAjaxValidation' => true,
            'enableClientValidation' => false,
        ]); ?>

        <?= $form->field($model, 'password')->passwordInput() ?>
        
        <p class="text-right">
            <?= Html::submitButton(Yii::t('user', 'Finish'), ['class' => 'btn btn-success btn-flat']) ?><br>
        </p>

        <?php ActiveForm::end(); ?>
    </div>
</div>