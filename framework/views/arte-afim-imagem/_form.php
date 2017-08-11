<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArteAfimImagem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="arte-afim-imagem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'arte_id')->textInput() ?>

    <?= $form->field($model, 'imagem_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
