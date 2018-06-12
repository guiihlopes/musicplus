<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Composicao */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Composicaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="content">
    <section class="vbox" id="bjax-el">
        <section class="scrollable wrapper-lg">
            <div class="row">
            <div class="col-sm-8">
                <div class="panel wrapper-lg">
                <div class="row">
									<div class="col-sm-5">
                    <img src="<?= ($model->partitura_url !== null) ? Url::toRoute($model->partitura_url) : Url::toRoute('images/p2.png') ;?>" class="img-full m-b">
									</div>
									<div class="col-sm-7">
										<h2 class="m-t-none text-black"><?= $model->titulo_completo ?></h2>
										<div class="clearfix m-b-lg">
											<a href="#" class="thumb-sm pull-left m-r">
												<img src="<?= $model->compositor->imagem_principal !== null ? Url::toRoute($model->compositor->imagem_principal) : Url::toRoute('images/a0.png') ?>" class="img-circle">
											</a>
											<div class="clear">
												<a href="#" class="text-info"><?= $model->compositor->nome_completo ?></a>
											</div>
										</div>
										<div class="m-b-lg">
											<a href="#" class="btn btn-info">Play</a>
										</div>
										<div>
											Gênero: <a href="<?= Url::toRoute(['genero/view', 'id' => $model->genero->id]) ?>" class="badge bg-light"><?= $model->genero->descricao ?></a>
										</div>
									</div>
                </div>
                <div class="m-t">
									<p><?= $model->texto_informativo ?></p>
                </div>
                <h4 class="m-t-lg m-b">Play List</h4>
                <ul class="list-group list-group-lg">
                    <li class="list-group-item">
                    <div class="pull-right m-l">
											<a href="#" class="m-r-sm"><i class="icon-cloud-download"></i></a>
											<a href="#" class="m-r-sm"><i class="icon-plus"></i></a>
											<a href="#"><i class="icon-close"></i></a>
                    </div>
                    <a href="#" class="jp-play-me m-r-sm pull-left">
                        <i class="icon-control-play text"></i>
                        <i class="icon-control-pause text-active"></i>
                    </a>
                    <div class="clear text-ellipsis">
                        <span>E.T.M</span>
                        <span class="text-muted"> -- 04:35</span>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                <div class="panel-heading">Suggestions</div>
                <div class="panel-body">
                    <article class="media">
                    <a href="#" class="pull-left thumb-md m-t-xs">
                        <img src="images/m18.jpg">
                    </a>
                    <div class="media-body">                        
                        <a href="#" class="font-semibold">Bootstrap 3: What you need to know</a>
                        <div class="text-xs block m-t-xs"><a href="#">Travel</a> 2 minutes ago</div>
                    </div>
                    </article>
                    <article class="media">
                    <a href="#" class="pull-left thumb-md m-t-xs">
                        <img src="images/m19.jpg">
                    </a>
                    <div class="media-body">                        
                        <a href="#" class="font-semibold">Lorem ipsum dolor sit amet it.</a>
                        <div class="text-xs block m-t-xs"><a href="#">Design</a> 2 hours ago</div>
                    </div>
                    </article>
                    <article class="media">
                    <a href="#" class="pull-left thumb-md m-t-xs">
                        <img src="images/m20.jpg">
                    </a>
                    <div class="media-body">                        
                        <a href="#" class="font-semibold">Sed diam nonummy tincidunt ut laoreet</a>
                        <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>
                    </div>
                    </article>
                    <article class="media">
                    <a href="#" class="pull-left thumb-md m-t-xs">
                        <img src="images/m21.jpg">
                    </a>
                    <div class="media-body">                        
                        <a href="#" class="font-semibold">Lonummy nibh euismod sed laoreet</a>
                        <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>
                    </div>
                    </article>
                    <article class="media">
                    <a href="#" class="pull-left thumb-md m-t-xs">
                        <img src="images/m22.jpg">
                    </a>
                    <div class="media-body">                        
                        <a href="#" class="font-semibold">Mibh euismod tincidunt ut laoreet</a>
                        <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>
                    </div>
                    </article>
                </div>
                </div>
            </div>
            </div>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>