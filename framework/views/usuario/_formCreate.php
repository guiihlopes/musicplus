<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="m-b-lg">
    <header class="wrapper text-center">
        <strong>Sign up to find interesting thing</strong>
    </header>

    <?php $form = ActiveForm::begin([
        'fieldConfig' => [
            'template' => "<div class=\"form-group\">{input}</div>\n<div class=\"text-center\">{error}</div>",
        ],
    ]); ?>
    
    <?= $form->field($model, 'nome')->textInput([
        'maxlength' => true,
        'placeholder' => 'Nome',
        'class' => 'form-control rounded input-lg text-center no-border',
    ]) ?>

    <?= $form->field($model, 'sobrenome')->textInput([
        'maxlength' => true,
        'placeholder' => 'Sobrenome',
        'class' => 'form-control rounded input-lg text-center no-border',
    ]) ?>

    <?= $form->field($model, 'genero')->radioList([
        1 => 'Masculino',
        0 => 'Feminino',
    ]) ?>

    <?= $form->field($model, 'email')->textInput([
        'maxlength' => true,
        'placeholder' => 'Email *',
        'class' => 'form-control rounded input-lg text-center no-border',
    ]) ?>
    
    <?= $form->field($model, 'senha')->passwordInput([
        'maxlength' => true,
        'placeholder' => 'Senha *',
        'class' => 'form-control rounded input-lg text-center no-border',
    ]) ?>
            
    <!-- <div class="checkbox i-checks m-b">
            <label class="m-l">
                    <input type="checkbox" checked=""><i></i> Agree the <a href="#">terms and policy</a>
            </label>
    </div> -->
    <?= Html::submitButton($model->isNewRecord ? '<i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign up</span>' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded' : 'btn btn-primary']) ?>
    <div class="line line-dashed"></div>
    <p class="text-muted text-center"><small>Already have an account?</small></p>
    <a href="<?= Url::toRoute('site/login') ?>" class="btn btn-lg btn-info btn-block btn-rounded">Sign in</a>
        
    <?php ActiveForm::end(); ?>
</section>