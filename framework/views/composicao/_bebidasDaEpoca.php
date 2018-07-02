<?php
    use yii\widgets\ListView;
    use yii\data\ActiveDataProvider;
    use app\models\Bebida;
    $date = date_create_from_format('Y-m-d', $data);
    $dataProvider = new ActiveDataProvider([
        'query' => Bebida::find()
            ->where(['DATE_FORMAT(data, "%Y")' => $date->format('Y') ])
            ->orWhere(['pais_id' => $pais_id])
    ]);
?>
<div class="panel panel-default">
    <div class="panel-heading">Bebidas da época</div>
        <div class="panel-body">
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
                    return $this->render('/composicao/_bebidaItem.php', [
                        'model' => $model,
                    ]);
                },
            ]) ?>
        </div>
    </div>
</div>