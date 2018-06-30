<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\widgets\ActiveForm;
use app\assets\AppAsset;
use app\models\CompositorSearch;

$searchModel = new CompositorSearch();

AppAsset::register($this);
$this->registerJsFile(
  'js/bootstrap.js',
  ['depends' => [\yii\web\JqueryAsset::className()]]
);
$userMenu = function ($className = null, $arrowClass = null) {
    return Nav::widget([
        'options' => ['class' => 'dropdown-menu animated fadeInRight' . ($className !== null ? ' ' . $className : '')],
        'encodeLabels' => false,
        'items' => [
            ['label' => '<span class="'.($arrowClass === null ? "arrow top" : $arrowClass).'"></span>Settings', 'url' => ['/usuario/update', 'id' => Yii::$app->user->identity->id]],
            (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout',
                    [
                        'class' => 'btn btn-link logout',
                    ]
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
};
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
<body>
<?php $this->beginBody() ?>
<section class="vbox">
    <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
      <div class="navbar-header aside bg-info nav-xs">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="icon-list"></i>
        </a>
        <a href="<?= Url::toRoute('/') ?>" class="navbar-brand text-lt">
          <i class="icon-earphones"></i>
          <img src="images/logo.png" alt="." class="hide">
          <span class="hidden-nav-xs m-l-sm">Music +</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="icon-settings"></i>
        </a>
      </div>      
      <ul class="nav navbar-nav hidden-xs">
        <li>
          <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
            <i class="fa fa-indent text"></i>
            <i class="fa fa-dedent text-active"></i>
          </a>
        </li>
      </ul>
      <?php $form = ActiveForm::begin([
          'action' => ['/site/search'],
          'options' => [
            'class' => 'navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs'
          ],
          'method' => 'get',
      ]); ?>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <?= Html::submitButton('<i class="fa fa-search"></i>', ['class' => 'btn btn-sm bg-white btn-icon rounded']) ?>
            </span>
              <?= $form->field($searchModel, 'nome_completo')->textInput(['class' => 'form-control input-sm no-border rounded', 'placeholder' => 'Busque compositor...'])->label(false) ?>
          </div>
        </div>
      <?php ActiveForm::end(); ?>
      <div class="navbar-right ">
        <ul class="nav navbar-nav m-n hidden-xs nav-user user">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="<?= Url::toRoute('images/a0.png') ?>" alt="...">
              </span>
                <?= Yii::$app->user->identity->nome . ' ' . Yii::$app->user->identity->sobrenome ?>
              <b class="caret"></b>
            </a>
            <?= $userMenu(); ?>
          </li>
        </ul>
      </div>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-black dk nav-xs aside hidden-print" id="nav">          
          <section class="vbox">
            <section class="w-f-md scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                


                <!-- nav -->                 
                <nav class="nav-primary hidden-xs">
                <?php
                    echo Nav::widget([
                        'options' => ['class' => 'nav bg clearfix'],
                        'encodeLabels' => false,
                        'items' => [
                          '<li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                              Discover
                          </li>',
                          [
                            'label' => '<i class="icon-disc icon text-success"></i>
                              <span class="font-bold">Meus favoritos</span>',
                            'url' => ['/compositor/favoritos']
                          ],
                          '<li class="m-b hidden-nav-xs"></li>'
                        ],
                    ]);
                ?>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <div class="bg hidden-xs ">
                  <div class="dropdown dropup wrapper-sm clearfix">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb-sm avatar pull-left m-l-xs">                        
                        <img src="<?= Url::toRoute('images/a3.png') ?>" class="dker" alt="...">
                        <i class="on b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-l">
                          <strong class="font-bold text-lt"><?= Yii::$app->user->identity->nome . ' ' . Yii::$app->user->identity->sobrenome ?></strong> 
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block m-l">Art Director</span>
                      </span>
                    </a>
                    <?= $userMenu('aside text-left', 'arrow bottom hidden-nav-xs')?>
                  </div>
                </div>            
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <?= $content ?>
                <footer class="footer bg-dark">
                  <div id="jp_container_N">
                    <div class="jp-type-playlist">
                      <div id="jplayer_N" class="jp-jplayer hide"></div>
                      <div class="jp-gui">
                        <div class="jp-video-play hide">
                          <a class="jp-video-play-icon">play</a>
                        </div>
                        <div class="jp-interface">
                          <div class="jp-controls">
                            <div><a class="jp-previous"><i class="icon-control-rewind i-lg"></i></a></div>
                            <div>
                              <a class="jp-play"><i class="icon-control-play i-2x"></i></a>
                              <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>
                            </div>
                            <div><a class="jp-next"><i class="icon-control-forward i-lg"></i></a></div>
                            <div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
                            <div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="icon-list"></i></a></div>
                            <div class="jp-progress hidden-xs">
                              <div class="jp-seek-bar dk">
                                <div class="jp-play-bar bg-info">
                                </div>
                                <div class="jp-title text-lt">
                                  <ul>
                                    <li></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm">
                              <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a>
                              <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a>
                            </div>
                            <div class="hidden-xs hidden-sm jp-volume">
                              <div class="jp-volume-bar dk">
                                <div class="jp-volume-bar-value lter"></div>
                              </div>
                            </div>
                            <div>
                              <a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a>
                              <a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a>
                            </div>
                            <div>
                              <a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a>
                              <a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a>
                            </div>
                            <div class="hide">
                              <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a>
                              <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="jp-playlist dropup" id="playlist">
                        <ul class="dropdown-menu aside-xl dker">
                          <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                          <li class="list-group-item"></li>
                        </ul>
                      </div>
                      <div class="jp-no-solution hide">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                      </div>
                    </div>
                  </div>
                </footer>
              </section>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>    
  </section>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
