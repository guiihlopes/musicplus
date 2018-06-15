<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use app\models\Pais;
use app\models\Genero;
use app\models\Tonalidade;
use app\models\Compositor;

/* @var $this yii\web\View */
/* @var $model app\models\Composicao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="composicao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'compositor_id')->dropDownList(
        ArrayHelper::map(
            Compositor::find()->all(), 'id', 'nome_completo'
        ),
        [
            'prompt' => '',
        ]
    ) ?>

    <?= $form->field($model, 'titulo_completo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texto_informativo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'data_composicao')->widget(DateControl::className(),[
        'pluginOptions' => [
            'todayHighlight' => true
        ]
    ])
    ?>

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

    <?= $form->field($model, 'tonalidade_id')->dropDownList(
        ArrayHelper::map(
            Tonalidade::find()->all(), 'id', 'nome'
        ),
        [
            'prompt' => ''
        ]
    ) ?>

    <?= $form->field($model, 'partitura_url')->widget(\noam148\imagemanager\components\ImageManagerInputWidget::className(), [
            'cropViewMode' => 1, //crop mode, option info: https://github.com/fengyuanchen/cropper/#viewmode
            'showPreview' => true, //false to hide the preview
            'showDeletePickedImageConfirm' => false, //on true show warning before detach image
    ]); ?>

    <?= $form->field($model, 'composicao_url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
