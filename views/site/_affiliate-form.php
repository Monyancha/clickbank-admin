<div class="row">
    <div class="col-sm-12">
        <?= $form->field($model, 'account_name') ?>
        <?= $form->field($model, 'account_login_link')->textInput(['type' => 'url']) ?>
        <?= $form->field($model, 'account_username') ?>
        <?= $form->field($model, 'account_password') ?>
    </div>
</div>