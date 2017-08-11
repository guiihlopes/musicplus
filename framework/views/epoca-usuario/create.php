<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EpocaUsuario */

$this->title = 'Create Epoca Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Epoca Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="epoca-usuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
