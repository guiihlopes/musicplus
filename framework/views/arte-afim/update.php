<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ArteAfim */

$this->title = 'Atualizar arte afim: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Artes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="arte-afim-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
