<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CompositorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compositor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome_completo') ?>

    <?= $form->field($model, 'data_nascimento') ?>

    <?= $form->field($model, 'bio') ?>

    <?= $form->field($model, 'epoca_id') ?>

    <?php // echo $form->field($model, 'pais_nascimento_id') ?>

    <?php // echo $form->field($model, 'data_falescimento') ?>

    <?php // echo $form->field($model, 'pais_falescimento_id') ?>

    <?php // echo $form->field($model, 'imagem_principal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
