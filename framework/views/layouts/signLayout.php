<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="app js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="bg-info dker">
<?php $this->beginBody() ?>

<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
  <div class="container aside-xl">
    <a class="navbar-brand block" href="<?= Url::toRoute('site/index') ?>"><span class="h1 font-bold">Music plus</span></a>
    <?= $content ?>
  </div>
</section>


<footer id="footer">
  <div class="text-center padder">
    <p>
      <small>Music +<br>&copy; <?= date('Y') ?></small>
    </p>
  </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
