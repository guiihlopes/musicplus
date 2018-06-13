<?php
  use yii\widgets\ListView;
  use yii\data\ActiveDataProvider;
  $dataProvider = new ActiveDataProvider([
    'query' => $model,
]);
?>
<ul class="list-group list-group-lg">
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'options' => [
            'tag' => false,
        ],
        'itemOptions' => [
            'tag' => false,
        ],
        'itemView' => function ($model, $key, $index, $widget) {
            return $this->render('/composicao/_listaComposicaoItem', [
                'model' => $model,
            ]);
        },
    ]) ?>
</ul>