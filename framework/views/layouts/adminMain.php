<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Music plus',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Usuarios', 'url' => ['/usuario/index']],
            ['label' => 'Compositores', 'url' => ['/compositor/index']],
            ['label' => 'Composições', 'url' => ['/composicao/index']],
            ['label' => 'Épocas', 'url' => ['/epoca/index']],
            ['label' => 'Bebidas', 'url' => ['/bebida/index']],
            ['label' => 'Tonalidades', 'url' => ['/tonalidade/index']],
            ['label' => 'Gêneros', 'url' => ['/genero/index']],
            ['label' => 'Acontecimentos', 'url' => ['/marco-historico/index']],
            ['label' => 'Arte', 'url' => ['/arte-afim/index']],
            ['label' => 'Imagens', 'url' => ['/imagem/index']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                ['label' => 'Logout', 'url' => ['/site/logout']]
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Music plus <?= date('Y') ?></p>

        <p class="pull-right">Music Plus</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
