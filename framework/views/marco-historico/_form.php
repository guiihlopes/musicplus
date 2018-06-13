<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use app\models\Pais;

/* @var $this yii\web\View */
/* @var $model app\models\MarcoHistorico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marco-historico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'data')->widget(DateControl::className(),[
        'pluginOptions' => [
            'todayHighlight' => true
        ]
    ])
    ?>

    <?= $form->field($model, 'descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pais_id')->dropDownList(ArrayHelper::map(Pais::find()->all(), 'id', 'nome'), ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
