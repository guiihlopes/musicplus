<?php

/* @var $this yii\web\View */
use yii\widgets\ListView;

$this->title = 'Music +';
?>
<section class="scrollable padder-lg w-f-md" id="bjax-target">
    <a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin"><i class="icon-refresh i-lg  inline" id="refresh"></i></a>
    <h2 class="font-thin m-b">Discover <span class="musicbar animate inline m-l-sm" style="width:20px;height:20px">
    <span class="bar1 a1 bg-primary lter"></span>
        <span class="bar2 a2 bg-info lt"></span>
        <span class="bar3 a3 bg-success"></span>
        <span class="bar4 a4 bg-warning dk"></span>
        <span class="bar5 a5 bg-danger dker"></span>
        </span>
    </h2>
    <div class="row row-sm">
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'summary' => '',
            'options' => ['tag' => false],
            'itemOptions' => ['tag' => false],
            'itemView' => function ($model, $key, $index, $widget) {
                return $this->render('/compositor/_compositorItem', [
                    'model' => $model,
                ]);
            },
        ]) ?>
    </div>
</section>