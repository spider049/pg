<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\docsis\models\WorkorderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workorder-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'workorder_status_id') ?>

    <?= $form->field($model, 'typeinstall_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'circuit_id') ?>

    <?php // echo $form->field($model, 'customers_name') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'gps') ?>

    <?php // echo $form->field($model, 'catv_no') ?>

    <?php // echo $form->field($model, 'fixedline_plus') ?>

    <?php // echo $form->field($model, 'due_date') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
