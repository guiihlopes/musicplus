<?php
  use yii\widgets\ListView;
?>
<ul class="list-group list-group-lg no-radius no-border no-bg m-t-n-xxs m-b-none auto">
  <?= ListView::widget([
      'dataProvider' => $model,
      'summary' => '',
      'options' => [
        'tag' => false,
      ],
      'itemOptions' => [
        'tag' => false,
      ],
      'itemView' => function ($model, $key, $index, $widget) {
          return $this->render('/compositor/_listaComposicaoItem', [
              'model' => $model,
          ]);
      },
  ]) ?>
</ul>