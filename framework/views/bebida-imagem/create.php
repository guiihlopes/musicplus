<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BebidaImagem */

$this->title = 'Create Bebida Imagem';
$this->params['breadcrumbs'][] = ['label' => 'Bebida Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bebida-imagem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
