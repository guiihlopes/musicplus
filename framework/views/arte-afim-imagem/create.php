<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ArteAfimImagem */

$this->title = 'Create Arte Afim Imagem';
$this->params['breadcrumbs'][] = ['label' => 'Arte Afim Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arte-afim-imagem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
