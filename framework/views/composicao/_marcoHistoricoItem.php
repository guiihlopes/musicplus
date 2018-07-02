<?php
  use yii\helpers\Url;
  $imagens = $model->marcoHistoricoImagens;
  $imagem = null;
  if (count($imagens)) {
      $randomIndex = array_rand($imagens, 1);
      $imagem = Yii::$app->imagemanager->getImagePath($imagens[$randomIndex]->imagem_id);
  }
?>
<article class="media">
    <a href="#" class="pull-left thumb-md m-t-xs">
        <img src="<?= count($imagens) && $imagem ? Url::toRoute($imagem) : Url::toRoute('images/m18.jpg') ?>">
    </a>
    <div class="media-body">                        
        <a href="#" class="font-semibold"><?= $model->descricao ?></a>
        <div class="text-xs block m-t-xs">
            <a href="#"><?= $model->pais->nome ?></a> <?= $model->data ?>
        </div>
    </div>
</article>