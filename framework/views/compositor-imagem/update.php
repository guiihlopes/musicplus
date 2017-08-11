<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CompositorImagem */

$this->title = 'Update Compositor Imagem: ' . $model->compositor_id;
$this->params['breadcrumbs'][] = ['label' => 'Compositor Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->compositor_id, 'url' => ['view', 'compositor_id' => $model->compositor_id, 'imagem_id' => $model->imagem_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="compositor-imagem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
