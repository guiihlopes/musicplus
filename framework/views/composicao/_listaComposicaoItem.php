<?php
  use yii\helpers\Url;
?>
<li class="list-group-item">       
    <div class="clear text-ellipsis">
        <a href="<?= Url::toRoute(['composicao/view', 'id' => $model->id]) ?>" class="m-r-sm pull-left">
            <span><?= substr($model->titulo_completo,0,65)."..." ?></span>
            <span class="text-muted"> -- <?= $model->pais->nome ?></span>
        </a>
    </div>
</li>