<?php

namespace app\controllers;

use Yii;
use app\models\MarcoHistoricoImagem;
use app\models\MarcoHistoricoImagemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MarcoHistoricoImagemController implements the CRUD actions for MarcoHistoricoImagem model.
 */
class MarcoHistoricoImagemController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MarcoHistoricoImagem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MarcoHistoricoImagemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MarcoHistoricoImagem model.
     * @param integer $marco_historico_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionView($marco_historico_id, $imagem_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($marco_historico_id, $imagem_id),
        ]);
    }

    /**
     * Creates a new MarcoHistoricoImagem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($marco_historico_id)
    {
        $model = new MarcoHistoricoImagem();
        $model->marco_historico_id = $marco_historico_id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['marco-historico/index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MarcoHistoricoImagem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $marco_historico_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionUpdate($marco_historico_id, $imagem_id)
    {
        $model = $this->findModel($marco_historico_id, $imagem_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'marco_historico_id' => $model->marco_historico_id, 'imagem_id' => $model->imagem_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MarcoHistoricoImagem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $marco_historico_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionDelete($marco_historico_id, $imagem_id)
    {
        $this->findModel($marco_historico_id, $imagem_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MarcoHistoricoImagem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $marco_historico_id
     * @param integer $imagem_id
     * @return MarcoHistoricoImagem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($marco_historico_id, $imagem_id)
    {
        if (($model = MarcoHistoricoImagem::findOne(['marco_historico_id' => $marco_historico_id, 'imagem_id' => $imagem_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
