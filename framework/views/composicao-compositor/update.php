<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComposicaoCompositor */

$this->title = 'Update Composicao Compositor: ' . $model->composicao_id;
$this->params['breadcrumbs'][] = ['label' => 'Composicao Compositors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->composicao_id, 'url' => ['view', 'composicao_id' => $model->composicao_id, 'compositor_id' => $model->compositor_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="composicao-compositor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
