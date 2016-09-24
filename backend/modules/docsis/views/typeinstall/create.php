<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Typeinstall */

$this->title = 'Create Typeinstall';
$this->params['breadcrumbs'][] = ['label' => 'Typeinstalls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typeinstall-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
