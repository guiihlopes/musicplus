<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MarcoHistoricoImagem */

$this->title = 'Update Marco Historico Imagem: ' . $model->marco_historico_id;
$this->params['breadcrumbs'][] = ['label' => 'Marco Historico Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->marco_historico_id, 'url' => ['view', 'marco_historico_id' => $model->marco_historico_id, 'imagem_id' => $model->imagem_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marco-historico-imagem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
