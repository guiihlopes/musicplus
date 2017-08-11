<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MarcoHistoricoImagem */

$this->title = 'Create Marco Historico Imagem';
$this->params['breadcrumbs'][] = ['label' => 'Marco Historico Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marco-historico-imagem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
