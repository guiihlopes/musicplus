<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tonalidade */

$this->title = 'Update Tonalidade: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tonalidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tonalidade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
