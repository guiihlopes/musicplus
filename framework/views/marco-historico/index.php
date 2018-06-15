<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MarcoHistoricoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Marcos históricos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marco-historico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar acontecimento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'data',
            'descricao:ntext',
            'pais.nome',

            [
                'label' => 'Adicionar imagens',
                'format' => 'html',
                'value' => function($data) {
                    return Html::a('Adicionar', Url::toRoute(['marco-historico-imagem/create', 'marco_historico_id' => $data->id]), ['class' => 'btn btn-xs btn-success']);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
