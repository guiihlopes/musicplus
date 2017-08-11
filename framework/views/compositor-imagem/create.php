<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CompositorImagem */

$this->title = 'Create Compositor Imagem';
$this->params['breadcrumbs'][] = ['label' => 'Compositor Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compositor-imagem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
