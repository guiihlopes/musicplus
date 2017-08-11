<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EpocaImagem */

$this->title = $model->epoca_id;
$this->params['breadcrumbs'][] = ['label' => 'Epoca Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="epoca-imagem-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'epoca_id' => $model->epoca_id, 'imagem_id' => $model->imagem_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'epoca_id' => $model->epoca_id, 'imagem_id' => $model->imagem_id], [
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
            'epoca_id',
            'imagem_id',
        ],
    ]) ?>

</div>
