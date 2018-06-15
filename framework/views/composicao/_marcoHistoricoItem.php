<?php
  use yii\helpers\Url;
  $imagens = $model->marcoHistoricoImagens;
?>
<article class="media">
    <a href="#" class="pull-left thumb-md m-t-xs">
        <img src="<?= count($imagens) ? Url::toRoute(Yii::$app->imagemanager->getImagePath($imagens[rand(0, count($imagens) - 1)]->imagem_id)) : Url::toRoute('images/m18.jpg') ?>">
    </a>
    <div class="media-body">                        
        <a href="#" class="font-semibold"><?= $model->descricao ?></a>
        <div class="text-xs block m-t-xs"><a href="#"><?= $model->pais->nome ?></a> <?= $model->data ?></div>
    </div>
</article>