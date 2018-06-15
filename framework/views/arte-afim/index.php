<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArteAfimSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arte-afim-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar arte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            // 'data',
            'descricao:ntext',
            'autor',
            [
                'label' => 'Adicionar imagens',
                'format' => 'html',
                'value' => function($data) {
                    return Html::a('Adicionar', Url::toRoute(['arte-afim-imagem/create', 'arte_afim_id' => $data->id]), ['class' => 'btn btn-xs btn-success']);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
