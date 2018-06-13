<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Composicao */

$this->title = 'Atualizar composição: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Composições', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="composicao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
