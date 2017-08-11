<?php

namespace app\controllers;

use Yii;
use app\models\ArteAfimImagem;
use app\models\ArteAfimImagemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArteAfimImagemController implements the CRUD actions for ArteAfimImagem model.
 */
class ArteAfimImagemController extends Controller
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
     * Lists all ArteAfimImagem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArteAfimImagemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ArteAfimImagem model.
     * @param integer $arte_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionView($arte_id, $imagem_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($arte_id, $imagem_id),
        ]);
    }

    /**
     * Creates a new ArteAfimImagem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ArteAfimImagem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'arte_id' => $model->arte_id, 'imagem_id' => $model->imagem_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ArteAfimImagem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $arte_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionUpdate($arte_id, $imagem_id)
    {
        $model = $this->findModel($arte_id, $imagem_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'arte_id' => $model->arte_id, 'imagem_id' => $model->imagem_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ArteAfimImagem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $arte_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionDelete($arte_id, $imagem_id)
    {
        $this->findModel($arte_id, $imagem_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ArteAfimImagem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $arte_id
     * @param integer $imagem_id
     * @return ArteAfimImagem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($arte_id, $imagem_id)
    {
        if (($model = ArteAfimImagem::findOne(['arte_id' => $arte_id, 'imagem_id' => $imagem_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
