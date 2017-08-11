<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Composicao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="composicao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo_completo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texto_informativo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'data_composicao')->textInput() ?>

    <?= $form->field($model, 'pais_id')->textInput() ?>

    <?= $form->field($model, 'genero_id')->textInput() ?>

    <?= $form->field($model, 'tonalidade_id')->textInput() ?>

    <?= $form->field($model, 'partitura_url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
