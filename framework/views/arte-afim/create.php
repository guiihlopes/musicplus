<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ArteAfim */

$this->title = 'Create Arte Afim';
$this->params['breadcrumbs'][] = ['label' => 'Arte Afims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arte-afim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
