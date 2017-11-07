<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use app\models\Pais;

/* @var $this yii\web\View */
/* @var $model app\models\Bebida */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bebida-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textInput()->widget(MaskedInput::className(), [
        'clientOptions' => [
            'alias' => 'date',
        ]
    ]) ?>

    <?= $form->field($model, 'teor_alcoolico')->textInput() ?>

    <?= $form->field($model, 'amadurecimento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'safra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pais_id')->dropDownList(ArrayHelper::map(
        Pais::find()->all(), 'id', 'nome'
    ), [
        'prompt' => ''
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
