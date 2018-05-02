<?php
    use yii\helpers\Url;
?>
<div class="col-xs-4 col-sm-3 col-md-2 col-lg-1">
    <div class="item">
        <div class="pos-rlt">
            <div class="item-overlay opacity r r-2x bg-black">
                <div class="text-info padder m-t-sm text-sm">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o text-muted"></i>
                </div>
                <div class="center text-center m-t-n">
                    <a href=<?= $model->composicao_url ?>>
                        <i class="icon-control-play i-2x text"></i>
                        <i class="icon-control-pause i-2x text-active"></i>
                    </a>
                </div>
                <div class="bottom padder m-b-sm">
                    <a href="#" class="pull-right">
                        <i class="fa fa-heart-o"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                </div>
            </div>
            <a href="#">
                <img src="<?= $model->partitura_url ? Url::toRoute($model->partitura_url) : Url::toRoute('images/p9.jpg')?>" alt="" class="r r-2x img-full">
            </a>
        </div>
        <div class="padder-v" data-color="<?= $model->tonalidade->cor ?>">
            <a href="<?= Url::toRoute(['/composicao/informacoes', 'id' => $model->id])?>" class="text-ellipsis"><?= $model->titulo_completo ?></a>
            <a href="<?= Url::toRoute(['/compositor/informacoes', 'id' => $model->compositor->id])  ?>" class="text-ellipsis text-xs text-muted"><?= $model->compositor->nome_completo ?></a>
        </div>
    </div>
</div>