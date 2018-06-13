<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Imagem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imagem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?php if (!$model->isNewRecord): ?>
        <div>
            <label>Imagem atual</label>
            <figure>
                <?= Html::img(Url::toRoute($model->url)) ?>
            </figure>
        </div>
    <?php endif; ?>

    <?= $form->field($model, 'url')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
