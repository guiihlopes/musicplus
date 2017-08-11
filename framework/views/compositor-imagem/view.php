<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CompositorImagem */

$this->title = $model->compositor_id;
$this->params['breadcrumbs'][] = ['label' => 'Compositor Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compositor-imagem-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'compositor_id' => $model->compositor_id, 'imagem_id' => $model->imagem_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'compositor_id' => $model->compositor_id, 'imagem_id' => $model->imagem_id], [
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
            'compositor_id',
            'imagem_id',
        ],
    ]) ?>

</div>
