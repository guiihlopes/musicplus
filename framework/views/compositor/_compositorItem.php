<?php
    use yii\helpers\Url;
    $url_user = Url::toRoute(['/compositor/informacoes', 'id' => $model->id]);
?>
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 card-compositor">
  <a href="<?= $url_user ?>" class="text-xs text-muted"><?= $model->nome_completo ?></a>
  <div class="item">
      <div class="pos-rlt">
          <div class="item-overlay opacity r r-2x bg-black">
              <div class="center text-center m-t-n">
                <a href="<?= $url_user ?>">
                  <i class="fa fa-plus-circle text"></i> Conhecer
                </a>
              </div>
              <div class="bottom padder m-b-sm">
                <a href="#" class="pull-right">
                    <i class="fa fa-heart-o"></i>
                </a>
            </div>
          </div>
          <a href="#">
              <img src="<?= $model->imagem_principal ? Url::toRoute($model->imagem_principal) : Url::toRoute('images/p9.jpg')?>" alt="" class="r r-2x img-full">
          </a>
      </div>
      <div class="padder-v">
        <a href="<?= $url_user  ?>" class="text-ellipsis text-xs text-muted"><?= $model->nome_completo ?></a>
      </div>
  </div>
</div>