<?php
  use yii\helpers\Url;
?>
<li class="list-group-item">
  <div class="clear text-ellipsis">
    <a 
      href="<?= Url::toRoute(['composicao/view', 'id' => $model->id]) ?>" 
      class="m-r-sm pull-left">
      <?= $model->titulo_completo ?>
    </a>
    <span class="text-muted"> -- 04:35</span>
  </div>
</li>