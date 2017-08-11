<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ArteAfimImagem */

$this->title = $model->arte_id;
$this->params['breadcrumbs'][] = ['label' => 'Arte Afim Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arte-afim-imagem-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'arte_id' => $model->arte_id, 'imagem_id' => $model->imagem_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'arte_id' => $model->arte_id, 'imagem_id' => $model->imagem_id], [
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
            'arte_id',
            'imagem_id',
        ],
    ]) ?>

</div>
