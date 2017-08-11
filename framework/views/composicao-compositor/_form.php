<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComposicaoCompositor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="composicao-compositor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'composicao_id')->textInput() ?>

    <?= $form->field($model, 'compositor_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
