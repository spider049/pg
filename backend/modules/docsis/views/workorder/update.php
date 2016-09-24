<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Workorder */

$this->title = 'Update Workorder: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Workorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'workorder_status_id' => $model->workorder_status_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="workorder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
