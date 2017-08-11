<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Compositor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compositor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome_completo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_nascimento')->textInput() ?>

    <?= $form->field($model, 'bio')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'epoca_id')->textInput() ?>

    <?= $form->field($model, 'pais_nascimento_id')->textInput() ?>

    <?= $form->field($model, 'data_falescimento')->textInput() ?>

    <?= $form->field($model, 'pais_falescimento_id')->textInput() ?>

    <?= $form->field($model, 'imagem_principal')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
