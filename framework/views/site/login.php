<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="m-b-lg">
    <header class="wrapper text-center">
        <strong>Sign in to get in touch</strong>
    </header>
    <?php $form = ActiveForm::begin([
        'fieldConfig' => [
            'template' => "<div class=\"form-group\">{input}</div>\n<div class=\"text-center\">{error}</div>",
        ],
    ]); ?>
        <?= $form->field($model, 'username')->textInput([
            'autofocus' => true,
            'placeholder' => "Email",
            'class' => 'form-control rounded input-lg text-center no-border'
        ]) ?>
        
        <?= $form->field($model, 'password')->passwordInput([
            'placeholder' => "Password",
            'class' => "form-control rounded input-lg text-center no-border"
        ]) ?>

        <?= Html::submitButton('<i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign in</span>', [
            'class' => 'btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded',
            'name' => 'login-button'
        ]) ?>
        <?php if (Yii::$app->session->hasFlash('accountDisabled')): ?>

        <div class="alert alert-danger text-center m-t">
            Your account is disabled
        </div>

        <?php endif; ?>
        <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>
        <div class="line line-dashed"></div>
        <p class="text-muted text-center"><small>Do not have an account?</small></p>
        <a href="<?= Url::toRoute('usuario/create') ?>" class="btn btn-lg btn-info btn-block rounded">Create an account</a>
    <?php ActiveForm::end(); ?>
</section>

<!-- <?= $form->field($model, 'rememberMe')->checkbox([
    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
]) ?> -->
