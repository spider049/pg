<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\docsis\models\WorkorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ใบงาน Docsis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success box-solid">
    <div class="box-header"></div>
    

    <div class="box-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มใบงาน', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'workorder_status_id',
            //'typeinstall_id',
            //'user_id',
            'circuit_id',
            'customers_name',
            // 'address:ntext',
            // 'tel',
            // 'gps',
            // 'catv_no',
            // 'fixedline_plus',
            // 'due_date',
            // 'remarks',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>
