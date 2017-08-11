<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Epoca */

$this->title = 'Create Epoca';
$this->params['breadcrumbs'][] = ['label' => 'Epocas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="epoca-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
