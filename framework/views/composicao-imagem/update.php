<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComposicaoImagem */

$this->title = 'Update Composicao Imagem: ' . $model->obra_id;
$this->params['breadcrumbs'][] = ['label' => 'Composicao Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->obra_id, 'url' => ['view', 'obra_id' => $model->obra_id, 'imagem_id' => $model->imagem_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="composicao-imagem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
