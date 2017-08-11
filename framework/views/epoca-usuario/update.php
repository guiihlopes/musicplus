<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EpocaUsuario */

$this->title = 'Update Epoca Usuario: ' . $model->epoca_id;
$this->params['breadcrumbs'][] = ['label' => 'Epoca Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->epoca_id, 'url' => ['view', 'epoca_id' => $model->epoca_id, 'usuario_id' => $model->usuario_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="epoca-usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
