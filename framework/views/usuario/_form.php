<?php

use yii\helpers\Html;
use app\models\Perfil;
use app\models\Genero;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;

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

    <?= $form->field($model, 'data_nascimento')->widget(DateControl::className(),[
        'pluginOptions' => [
            'todayHighlight' => true
        ]
    ])
    ?>
    <?php if (Yii::$app->user->identity->perfil_id == 1): ?>
        <?= $form->field($model, 'perfil_id')->dropDownList(ArrayHelper::map(Perfil::find()->all(), 'id', 'descricao'), [
            'prompt' => ''
        ]) ?>
    <?php endif; ?>
    

    <?= $form->field($model, 'genero')->radioList([
        0 => 'Masculino',
        1 => 'Feminino',
    ]) ?>

    <?php if (Yii::$app->user->identity->perfil_id == 1): ?>
        <?= $form->field($model, 'status')->radioList([
            0 => 'Inativo',
            1 => 'Ativo',
        ]) ?>
    <?php endif; ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
