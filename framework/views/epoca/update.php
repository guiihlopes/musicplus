<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Epoca */

$this->title = 'Atualizar Época: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Épocas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="epoca-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
