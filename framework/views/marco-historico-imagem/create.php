<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MarcoHistoricoImagem */

$this->title = 'Cadastrar imagem de: ';
$this->params['breadcrumbs'][] = ['label' => 'Imagens de marco histórico', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marco-historico-imagem-create">

    <h1><?= Html::encode($this->title) . substr($model->marcoHistorico->descricao,0,35)."..." ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
