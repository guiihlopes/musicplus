<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EpocaImagem */

$this->title = 'Update Epoca Imagem: ' . $model->epoca_id;
$this->params['breadcrumbs'][] = ['label' => 'Epoca Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->epoca_id, 'url' => ['view', 'epoca_id' => $model->epoca_id, 'imagem_id' => $model->imagem_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="epoca-imagem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
