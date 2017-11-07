<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use app\models\Pais;
use app\models\Genero;

/* @var $this yii\web\View */
/* @var $model app\models\Composicao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="composicao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo_completo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texto_informativo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'data_composicao')->textInput()->widget(MaskedInput::className(), [
        'clientOptions' => [
            'alias' => 'date',
        ]
    ]) ?>

    <?= $form->field($model, 'pais_id')->dropDownList(
        ArrayHelper::map(
                Pais::find()->all(), 'id', 'nome'
            ),
            [
                'prompt' => ''
            ]
        ) ?>

    <?= $form->field($model, 'genero_id')->dropDownList(
        ArrayHelper::map(
                Genero::find()->all(), 'id', 'descricao'
            ),
            [
                'prompt' => ''
            ]
        ) ?>

    <?= $form->field($model, 'tonalidade_id')->textInput() ?>

    <?= $form->field($model, 'partitura_url')->fileInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
