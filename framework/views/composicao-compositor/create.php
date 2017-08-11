<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ComposicaoCompositor */

$this->title = 'Create Composicao Compositor';
$this->params['breadcrumbs'][] = ['label' => 'Composicao Compositors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="composicao-compositor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
