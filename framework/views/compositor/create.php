<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Compositor */

$this->title = 'Cadastrar Compositor';
$this->params['breadcrumbs'][] = ['label' => 'Compositores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compositor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
