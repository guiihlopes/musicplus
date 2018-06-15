<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ArteAfimImagem */

$this->title = 'Cadastrar imagem: ';
$this->params['breadcrumbs'][] = ['label' => 'Arte Afim Imagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arte-afim-imagem-create">

    <h1><?= Html::encode($this->title) . substr($model->arte->descricao,0,35)."..." ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
