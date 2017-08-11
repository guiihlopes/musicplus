<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComposicaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="composicao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'titulo_completo') ?>

    <?= $form->field($model, 'texto_informativo') ?>

    <?= $form->field($model, 'data_composicao') ?>

    <?= $form->field($model, 'pais_id') ?>

    <?php // echo $form->field($model, 'genero_id') ?>

    <?php // echo $form->field($model, 'tonalidade_id') ?>

    <?php // echo $form->field($model, 'partitura_url') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
