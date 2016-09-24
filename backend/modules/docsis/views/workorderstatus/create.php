<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Workorderstatus */

$this->title = 'Create Workorderstatus';
$this->params['breadcrumbs'][] = ['label' => 'Workorderstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workorderstatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
