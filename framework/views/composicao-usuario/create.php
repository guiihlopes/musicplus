<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ComposicaoUsuario */

$this->title = 'Create Composicao Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Composicao Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="composicao-usuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
