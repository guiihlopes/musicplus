<?php
    use yii\helpers\Url;
    $url_user = Url::toRoute(['/compositor/informacoes', 'id' => $model->id]);
    $favorite_user_url = Url::toRoute(['/compositor/favorito', 'id' => $model->id]);
    $script = <<< JS
    $('.favoriteCompositorLink').click(function (ev) {
        ev.preventDefault();
        var link = $(this);
        $.ajax({
            url: $(this).attr('href'),
            success: function(data) {
                if (data) {
                    link.find("i").attr('class', 'fa fa-heart');
                }
                return true;
            }
        });
    });
JS;
    $position = \yii\web\View::POS_READY;
    $this->registerJs($script, $position);
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
                <a href="<?= $favorite_user_url ?>" class="pull-right favoriteCompositorLink">
                    <i class="fa fa-heart<?= count($model->getUsuarios()->where(['id' => Yii::$app->user->identity->id])->one()) ? "" : "-o" ?>"></i>
                </a>
            </div>
          </div>
          <a href="#">
              <img src="<?= $model->imagem_principal ? Url::toRoute($model->imagem_principal) : Url::toRoute('images/p9.jpg')?>" alt="" class="r r-2x img-full">
          </a>
      </div>
      <div class="padder-v">
        <a href="<?= $url_user ?>" class="text-ellipsis text-xs text-muted"><?= $model->nome_completo ?></a>
      </div>
  </div>
</div>