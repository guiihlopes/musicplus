<?php

namespace app\controllers;

use Yii;
use app\models\EpocaImagem;
use app\models\EpocaImagemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EpocaImagemController implements the CRUD actions for EpocaImagem model.
 */
class EpocaImagemController extends Controller
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
     * Lists all EpocaImagem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EpocaImagemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EpocaImagem model.
     * @param integer $epoca_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionView($epoca_id, $imagem_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($epoca_id, $imagem_id),
        ]);
    }

    /**
     * Creates a new EpocaImagem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EpocaImagem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'epoca_id' => $model->epoca_id, 'imagem_id' => $model->imagem_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing EpocaImagem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $epoca_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionUpdate($epoca_id, $imagem_id)
    {
        $model = $this->findModel($epoca_id, $imagem_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'epoca_id' => $model->epoca_id, 'imagem_id' => $model->imagem_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EpocaImagem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $epoca_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionDelete($epoca_id, $imagem_id)
    {
        $this->findModel($epoca_id, $imagem_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EpocaImagem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $epoca_id
     * @param integer $imagem_id
     * @return EpocaImagem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($epoca_id, $imagem_id)
    {
        if (($model = EpocaImagem::findOne(['epoca_id' => $epoca_id, 'imagem_id' => $imagem_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
