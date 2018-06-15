<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CompositorImagemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compositor Imagems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compositor-imagem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Compositor Imagem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'compositor.nome_completo',
            [
                'attribute' => 'imagem_id',
                'format' => 'html',
                'value' => function ($data) {
                    return '<img class="thumb-lg" src="'. Yii::$app->imagemanager->getImagePath($data->imagem_id) .'" />';
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
