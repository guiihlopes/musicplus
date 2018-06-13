<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CompositorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compositores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compositor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar compositor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nome_completo',
            // 'data_nascimento',
            'bio:ntext',
            [
                'label' => 'Época',
                'value' => 'epoca.descricao'
            ],
            [
                'label' => 'País de nascimento',
                'value' => 'paisNascimento.nome'
            ],
            // 'data_falecimento',
            // 'pais_falecimento_id',
            [
                'label' => 'Imagem do compositor',
                'format' => 'html',
                'value' => function ($data) {
                    return '<img class="thumb-lg" src="'. Url::toRoute($data['imagem_principal']) .'" />';
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
