<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Composicao */

$this->title = 'Cadastrar composição';
$this->params['breadcrumbs'][] = ['label' => 'Composições', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="composicao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
