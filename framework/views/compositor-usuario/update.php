<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CompositorUsuario */

$this->title = 'Update Compositor Usuario: ' . $model->compositor_id;
$this->params['breadcrumbs'][] = ['label' => 'Compositor Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->compositor_id, 'url' => ['view', 'compositor_id' => $model->compositor_id, 'usuario_id' => $model->usuario_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="compositor-usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
