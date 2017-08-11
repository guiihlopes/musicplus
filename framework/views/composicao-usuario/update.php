<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComposicaoUsuario */

$this->title = 'Update Composicao Usuario: ' . $model->composicao_id;
$this->params['breadcrumbs'][] = ['label' => 'Composicao Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->composicao_id, 'url' => ['view', 'composicao_id' => $model->composicao_id, 'usuario_id' => $model->usuario_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="composicao-usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
