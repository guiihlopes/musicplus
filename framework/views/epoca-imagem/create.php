<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EpocaImagem */

$this->title = 'Create Epoca Imagem';
$this->params['breadcrumbs'][] = ['label' => 'Epoca Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="epoca-imagem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
