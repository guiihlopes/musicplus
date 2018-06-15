<?php

namespace app\controllers;

use Yii;
use app\models\BebidaImagem;
use app\models\BebidaImagemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BebidaImagemController implements the CRUD actions for BebidaImagem model.
 */
class BebidaImagemController extends BaseController
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
     * Lists all BebidaImagem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BebidaImagemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BebidaImagem model.
     * @param integer $bebida_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionView($bebida_id, $imagem_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($bebida_id, $imagem_id),
        ]);
    }

    /**
     * Creates a new BebidaImagem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($bebida_id)
    {
        $model = new BebidaImagem();
        $model->bebida_id = $bebida_id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['bebida/index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing BebidaImagem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $bebida_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionUpdate($bebida_id, $imagem_id)
    {
        $model = $this->findModel($bebida_id, $imagem_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'bebida_id' => $model->bebida_id, 'imagem_id' => $model->imagem_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing BebidaImagem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $bebida_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionDelete($bebida_id, $imagem_id)
    {
        $this->findModel($bebida_id, $imagem_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BebidaImagem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $bebida_id
     * @param integer $imagem_id
     * @return BebidaImagem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($bebida_id, $imagem_id)
    {
        if (($model = BebidaImagem::findOne(['bebida_id' => $bebida_id, 'imagem_id' => $imagem_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
