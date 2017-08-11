<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ComposicaoImagem */

$this->title = $model->obra_id;
$this->params['breadcrumbs'][] = ['label' => 'Composicao Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="composicao-imagem-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'obra_id' => $model->obra_id, 'imagem_id' => $model->imagem_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'obra_id' => $model->obra_id, 'imagem_id' => $model->imagem_id], [
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
            'obra_id',
            'imagem_id',
        ],
    ]) ?>

</div>
