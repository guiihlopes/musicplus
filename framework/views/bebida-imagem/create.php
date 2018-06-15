<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BebidaImagem */

$this->title = 'Cadastrar imagens de bebida';
$this->params['breadcrumbs'][] = ['label' => 'Imagens de bebida', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bebida-imagem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
