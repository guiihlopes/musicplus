<?php

use yii\helpers\Html;
use app\models\Perfil;
use app\models\Genero;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sobrenome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_nascimento')->textInput()->widget(MaskedInput::className(), [
        'clientOptions' => [
            'alias' => 'date',
        ]
    ]) ?>

    <?= $form->field($model, 'perfil_id')->dropDownList(ArrayHelper::map(Perfil::find()->all(), 'id', 'descricao'), [
        'prompt' => ''
    ]) ?>

    <?= $form->field($model, 'genero')->radioList(ArrayHelper::map(Genero::find()->all(), 'id', 'descricao')) ?>

    <?= $form->field($model, 'status')->radioList([
        0 => 'Inativo',
        1 => 'Ativo',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
