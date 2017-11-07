<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComposicaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Composições';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="composicao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar composição', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'titulo_completo',
            'texto_informativo:ntext',
            'data_composicao',
            'pais.nome',
            // 'genero_id',
            // 'tonalidade_id',
            // 'partitura_url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
