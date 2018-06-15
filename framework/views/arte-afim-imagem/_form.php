<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArteAfimImagem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="arte-afim-imagem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'arte_id')->textInput(['disabled' => 'disabled']) ?>

    <?= $form->field($model, 'imagem_id')->widget(\noam148\imagemanager\components\ImageManagerInputWidget::className(), [
            'cropViewMode' => 1, //crop mode, option info: https://github.com/fengyuanchen/cropper/#viewmode
            'showPreview' => true, //false to hide the preview
            'showDeletePickedImageConfirm' => false, //on true show warning before detach image
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
