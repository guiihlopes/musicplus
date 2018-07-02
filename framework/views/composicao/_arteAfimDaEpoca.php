<?php
    use yii\widgets\ListView;
    use yii\data\ActiveDataProvider;
    use app\models\ArteAfim;
    $date = date_create_from_format('Y-m-d', $data);
    $dataProvider = new ActiveDataProvider([
        'query' => ArteAfim::find()
            ->where(['DATE_FORMAT(data, "%Y")' => $date->format('Y') ])
    ]);
?>
<div class="panel panel-default">
    <div class="panel-heading">Arte da época</div>
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
                return $this->render('/composicao/_arteAfimItem', [
                    'model' => $model,
                ]);
            },
        ]) ?>
        </div>
    </div>
</div>