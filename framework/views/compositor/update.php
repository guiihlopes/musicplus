<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Compositor */

$this->title = 'Update Compositor: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Compositors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="compositor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
