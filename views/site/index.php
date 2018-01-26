<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Affiliates';
$models = $affiliatesDataProvider->models;
$modelsCount = $affiliatesDataProvider->totalCount;

$this->registerJs(<<<JS
$('#create-affiliate').modal({keyboard: false, show: false, backdrop: 'static'});
JS
);
?>
<div class="site-index">
    <p class="text-right">
        <button class="btn btn-default btn-flat" type="button" data-toggle="modal" data-target="#create-affiliate"><i class="fa fa-plus"></i> New Affiliate</button>
    </p>

    <div class="box box-solid">
        <!-- <div class="box-header">
            <h3 class="box-title">Striped Full Width Table</h3>
        </div> -->
        
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <thead>
                    <th style="width: 10px">#</th>
                    <th>Affiliate Account Name</th>
                    <th>Login Link</th>
                    <th>Username</th>
                    <th class="text-right">Action</th>
                </thead>

                <tbody>
                    <?php if ($modelsCount == 0):?>
                        <i class="text-danger">No records found</i>
                    <?php endif; ?>

                    <?php for ($i = 0; $i < $modelsCount; $i++): ?>
                    <tr>
                        <td><?= ($i + 1) ?></td>
                        <td><?= $models[$i]->account_name; ?></td>
                        <td>
                            <?= Yii::$app->formatter->asUrl($models[$i]->account_login_link, [$models[$i]->account_login_link, 'target' => '_blank']); ?>
                        </td>
                        <td><?= $models[$i]->account_username; ?></td>
                        <td class="text-right">
                            <?= Html::a('View', ['#'], ['class' => 'btn btn-xs btn-info btn-flat disabled']) ?>
                            <?= Html::a('Update', ['#'], ['class' => 'btn btn-xs btn-success btn-flat disabled']) ?>
                            <?= Html::a('Delete', ['#'], ['class' => 'btn btn-xs btn-danger btn-flat disabled']) ?>
                        </td>
                    </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
</div>

<?php $form = ActiveForm::begin(); ?>
<div class="modal fade" id="create-affiliate" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Create New Marketing Affiliate</h4>
            </div>
            <div class="modal-body">
                <?= $this->render('_affiliate-form',[
                    'model' => $model,
                    'form' => $form,
                ]); ?>
            </div>
            <div class="modal-footer">
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary btn-flat']) ?>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php ActiveForm::end() ?>
