<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\WorkorderStatus;
use common\models\Typeinstall;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Workorder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workorder-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'workorder_status_id')->dropDownList(ArrayHelper::map(WorkorderStatus::find()->all(), 'id', 'status')) ?>

    <?= $form->field($model, 'typeinstall_id')->dropDownList(ArrayHelper::map(Typeinstall::find()->all(), 'id', 'typedetail')) ?>

    <?= $form->field($model, 'user_id')->dropDownList(ArrayHelper::map(common\models\User::find()->all(), 'id', 'username')) ?>

    <?= $form->field($model, 'circuit_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customers_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catv_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fixedline_plus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'due_date')->textInput() ?>

    <?= $form->field($model, 'remarks')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
