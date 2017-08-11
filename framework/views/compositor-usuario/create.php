<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CompositorUsuario */

$this->title = 'Create Compositor Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Compositor Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compositor-usuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
