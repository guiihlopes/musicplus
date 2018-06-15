<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ComposicaoImagem */

$this->title = 'Cadastrar imagem: ';
$this->params['breadcrumbs'][] = ['label' => 'Composicao Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="composicao-imagem-create">

    <h1><?= Html::encode($this->title) . $model->obra->titulo_completo ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
