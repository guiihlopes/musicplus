<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tonalidade */

$this->title = 'Cadastrar Tonalidade';
$this->params['breadcrumbs'][] = ['label' => 'Tonalidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tonalidade-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
