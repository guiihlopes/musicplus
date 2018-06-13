<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Imagem */

$this->title = 'Cadastrar imagem';
$this->params['breadcrumbs'][] = ['label' => 'Imagens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imagem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
