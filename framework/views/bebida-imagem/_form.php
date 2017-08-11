<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BebidaImagem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bebida-imagem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bebida_id')->textInput() ?>

    <?= $form->field($model, 'imagem_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
