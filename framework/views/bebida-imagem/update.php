<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BebidaImagem */

$this->title = 'Update Bebida Imagem: ' . $model->bebida_id;
$this->params['breadcrumbs'][] = ['label' => 'Bebida Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bebida_id, 'url' => ['view', 'bebida_id' => $model->bebida_id, 'imagem_id' => $model->imagem_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bebida-imagem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
