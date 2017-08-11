<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MarcoHistorico */

$this->title = 'Update Marco Historico: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Marco Historicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marco-historico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
