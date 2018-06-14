<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Compositor */

$this->title = $model->nome_completo;
$this->params['breadcrumbs'][] = ['label' => 'Compositores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="w-f-md">
	<section class="hbox stretch bg-black dker">
		<aside class="col-sm-5 no-padder" id="sidebar">
			<section class="vbox animated fadeInUp">
				<section class="scrollable">
					<div class="m-t-n-xxs item pos-rlt">
						<div class="top text-right">
							<span class="musicbar bg-success bg-empty inline m-r-lg m-t" style="width:25px;height:30px">
								<span class="bar1 a3 lter"></span>
								<span class="bar2 a5 lt"></span>
								<span class="bar3 a1 bg"></span>
								<span class="bar4 a4 dk"></span>
								<span class="bar5 a2 dker"></span>
							</span>
						</div>
						<div class="bottom gd bg-info wrapper-lg">
							<span class="pull-right text-sm"><?= $model->epoca->descricao ?> <br>Época</span>
							<span class="h2 font-thin"><?= $model->nome_completo ?></span>
						</div>
						<img class="img-full" src="<?= Url::toRoute($model->imagem_principal) ?>" alt="...">
					</div>
					<div class="container">
						<h2>Biografia</h2>
						<p><?= $model->bio ?></p>
					</div>
				</section>
			</section>
		</aside>
		<section class="col-sm-4 no-padder bg">
			<section class="vbox">
				<section class="scrollable hover">
					<?= $this->render('/compositor/_listaComposicao', [
						'model' => $musics,
					]); ?>
				</section>
			</section>
		</section>
	</section>
</section>