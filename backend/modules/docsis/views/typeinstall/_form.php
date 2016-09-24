<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Typeinstall */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="typeinstall-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'typedetail')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
