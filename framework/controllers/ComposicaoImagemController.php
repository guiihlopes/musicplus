<?php

namespace app\controllers;

use Yii;
use app\models\ComposicaoImagem;
use app\models\ComposicaoImagemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ComposicaoImagemController implements the CRUD actions for ComposicaoImagem model.
 */
class ComposicaoImagemController extends Controller
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
     * Lists all ComposicaoImagem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ComposicaoImagemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ComposicaoImagem model.
     * @param integer $obra_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionView($obra_id, $imagem_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($obra_id, $imagem_id),
        ]);
    }

    /**
     * Creates a new ComposicaoImagem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($composicao_id)
    {
        $model = new ComposicaoImagem();
        $model->obra_id = $composicao_id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['composicao/index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ComposicaoImagem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $obra_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionUpdate($obra_id, $imagem_id)
    {
        $model = $this->findModel($obra_id, $imagem_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'obra_id' => $model->obra_id, 'imagem_id' => $model->imagem_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ComposicaoImagem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $obra_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionDelete($obra_id, $imagem_id)
    {
        $this->findModel($obra_id, $imagem_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ComposicaoImagem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $obra_id
     * @param integer $imagem_id
     * @return ComposicaoImagem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($obra_id, $imagem_id)
    {
        if (($model = ComposicaoImagem::findOne(['obra_id' => $obra_id, 'imagem_id' => $imagem_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
