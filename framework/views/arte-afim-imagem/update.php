<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ArteAfimImagem */

$this->title = 'Update Arte Afim Imagem: ' . $model->arte_id;
$this->params['breadcrumbs'][] = ['label' => 'Arte Afim Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->arte_id, 'url' => ['view', 'arte_id' => $model->arte_id, 'imagem_id' => $model->imagem_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="arte-afim-imagem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
