<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MarcoHistorico */

$this->title = 'Create Marco Historico';
$this->params['breadcrumbs'][] = ['label' => 'Marco Historicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marco-historico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
