<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Composicao */

$this->title = $model->titulo_completo;
$this->params['breadcrumbs'][] = ['label' => 'Composições', 'url' => ['index']];
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
                                <img src="<?= ($model->partitura_url !== null) ? Url::toRoute($model->partitura_url) : Url::toRoute('images/p2.jpg') ;?>" class="img-full m-b">
                            </div>
                            <div class="col-sm-7">
                                <h2 class="m-t-none text-black" title="<?= $model->titulo_completo ?>"><?= substr($model->titulo_completo,0,65)."..." ?></h2>
                                <div class="clearfix m-b-lg">
                                    <a href="#" class="thumb-sm pull-left m-r">
                                        <img src="<?= $model->compositor->imagem_principal !== null ? Url::toRoute($model->compositor->imagem_principal) : Url::toRoute('images/a0.png') ?>" class="img-circle">
                                    </a>
                                    <div class="clear">
                                        <a href="<?= Url::toRoute(['compositor/informacoes', 'id' => $model->compositor->id]) ?>" class="text-info"><?= $model->compositor->nome_completo ?></a>
                                    </div>
                                </div>
                                <div class="m-b-lg">
                                    <a href="<?= $model->composicao_url ?>" class="btn btn-info">Tocar</a>
                                </div>
                                <div>
                                    Gênero: <a href="<?= Url::toRoute(['genero/view', 'id' => $model->genero->id]) ?>" class="badge bg-light"><?= $model->genero->descricao ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="m-t">
                            <p><?= $model->texto_informativo ?></p>
                        </div>
                        <h4 class="m-t-lg m-b">Playlist do <?= $model->compositor->nome_completo ?></h4>
                        <?= $this->render('/composicao/_listaComposicao', [
                            'model' => $model->compositor->getComposicoes()->where(['<>', 'id', $model->id]),
                        ]); ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <?= $this->render('/composicao/_bebidasDaEpoca', [
                        'data' => $model->data_composicao,
                        'pais_id' => $model->pais_id,
                    ]); ?>
                </div>
                <div class="col-sm-6">
                    <?= $this->render('/composicao/_marcoHistoricoDaEpoca', [
                        'data' => $model->data_composicao,
                        'pais_id' => $model->pais_id,
                    ]); ?>
                </div>
                <div class="col-sm-6">
                    <?= $this->render('/composicao/_arteAfimDaEpoca', [
                        'data' => $model->data_composicao
                    ]); ?>
                </div>
            </div>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>