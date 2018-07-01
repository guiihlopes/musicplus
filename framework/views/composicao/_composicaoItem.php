<?php
    use yii\helpers\Url;
    $url_composicao = Url::toRoute(['/composicao/view', 'id' => $model->id]);
?>
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 card-compositor">
  <a href="<?= $url_composicao ?>" class="text-xs text-muted"><?= $model->titulo_completo ?></a>
  <div class="item">
      <div class="pos-rlt">
          <div class="item-overlay opacity r r-2x bg-black">
              <div class="center text-center m-t-n">
                <a href="<?= $url_composicao ?>">
                  <i class="fa fa-plus-circle text"></i> Conhecer
                </a>
              </div>
          </div>
          <a href="#">
              <img src="<?= $model->partitura_url && Yii::$app->imagemanager->getImagePath($model->partitura_url) ? Url::toRoute(Yii::$app->imagemanager->getImagePath($model->partitura_url)) : Url::toRoute('images/p9.jpg')?>" alt="" class="r r-2x img-full">
          </a>
      </div>
      <div class="padder-v">
        <a href="<?= $url_composicao ?>" class="text-ellipsis text-xs text-muted"><?= $model->titulo_completo ?></a>
      </div>
  </div>
</div>