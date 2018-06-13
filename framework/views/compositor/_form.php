<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\datecontrol\DateControl;
use app\models\Pais;
use app\models\Epoca;

/* @var $this yii\web\View */
/* @var $model app\models\Compositor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compositor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome_completo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_nascimento')->widget(DateControl::className(),[
        'pluginOptions' => [
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'bio')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'epoca_id')->dropDownList(
        ArrayHelper::map(
            Epoca::find()->all(), 'id', 'descricao'
        ), [
            'prompt' => ''
        ]) ?>

    <?= $form->field($model, 'pais_nascimento_id')->dropDownList(
        ArrayHelper::map(
            Pais::find()->all(), 'id', 'nome'
        ), [
            'prompt' => ''
        ]) ?>

    <?= $form->field($model, 'data_falecimento')->widget(DateControl::className(),[
        'pluginOptions' => [
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'pais_falecimento_id')->dropDownList(
        ArrayHelper::map(
            Pais::find()->all(), 'id', 'nome'
        ), [
            'prompt' => ''
    ]) ?>

     <?= $form->field($model, 'imagem_principal')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
