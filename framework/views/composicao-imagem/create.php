<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ComposicaoImagem */

$this->title = 'Create Composicao Imagem';
$this->params['breadcrumbs'][] = ['label' => 'Composicao Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="composicao-imagem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
