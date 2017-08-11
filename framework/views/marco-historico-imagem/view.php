<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MarcoHistoricoImagem */

$this->title = $model->marco_historico_id;
$this->params['breadcrumbs'][] = ['label' => 'Marco Historico Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marco-historico-imagem-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'marco_historico_id' => $model->marco_historico_id, 'imagem_id' => $model->imagem_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'marco_historico_id' => $model->marco_historico_id, 'imagem_id' => $model->imagem_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'marco_historico_id',
            'imagem_id',
        ],
    ]) ?>

</div>
