<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\WorkorderStatus;
use common\models\Typeinstall;

/* @var $this yii\web\View */
/* @var $model common\models\Workorder */

$this->title = 'ใบงาน Docsis';
$this->params['breadcrumbs'][] = ['label' => 'Workorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workorder-view">

   

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'workorder_status_id' => $model->workorder_status_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'workorder_status_id' => $model->workorder_status_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'คุณแน่ใจ หรือที่จะ ลบข้อมูลนี้?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'workorder_status_id',
            'workorderStatus.status',
            //'typeinstall_id',
            'typeinstall.typedetail',
            'user.username',
            'circuit_id',
            'customers_name',
            'address:ntext',
            'tel',
            'gps',
            'catv_no',
            'fixedline_plus',
            'due_date',
            'remarks',
        ],
    ]) ?>

</div>
