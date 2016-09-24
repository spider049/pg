<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\docsis\models\TypeinstallSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Typeinstalls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typeinstall-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Typeinstall', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'typedetail',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
