<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Workorder*/

$this->title = 'เพิ่มใบงาน Docsis';
$this->params['breadcrumbs'][] = ['label' => 'Workorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workorder-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
