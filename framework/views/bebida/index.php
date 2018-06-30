<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BebidaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bebidas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bebida-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Bebida', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nome',
            // 'data',
            'teor_alcoolico',
            'amadurecimento',
            'descricao:ntext',
            'safra',
            // 'tipo',
            // 'uva',
            [
                'attribute' => 'pais',
                'value' => 'pais.nome',
                'label' => 'País'
            ],
            [
                'label' => 'Adicionar imagens',
                'format' => 'html',
                'value' => function($data) {
                    return Html::a('Adicionar', Url::toRoute(['bebida-imagem/create', 'bebida_id' => $data->id]), ['class' => 'btn btn-xs btn-success']);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
