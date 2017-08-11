<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ComposicaoCompositor */

$this->title = $model->composicao_id;
$this->params['breadcrumbs'][] = ['label' => 'Composicao Compositors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="composicao-compositor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'composicao_id' => $model->composicao_id, 'compositor_id' => $model->compositor_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'composicao_id' => $model->composicao_id, 'compositor_id' => $model->compositor_id], [
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
            'composicao_id',
            'compositor_id',
        ],
    ]) ?>

</div>
