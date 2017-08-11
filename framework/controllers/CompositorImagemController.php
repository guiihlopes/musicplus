<?php

namespace app\controllers;

use Yii;
use app\models\CompositorImagem;
use app\models\CompositorImagemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CompositorImagemController implements the CRUD actions for CompositorImagem model.
 */
class CompositorImagemController extends Controller
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
     * Lists all CompositorImagem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CompositorImagemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CompositorImagem model.
     * @param integer $compositor_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionView($compositor_id, $imagem_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($compositor_id, $imagem_id),
        ]);
    }

    /**
     * Creates a new CompositorImagem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CompositorImagem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'compositor_id' => $model->compositor_id, 'imagem_id' => $model->imagem_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CompositorImagem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $compositor_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionUpdate($compositor_id, $imagem_id)
    {
        $model = $this->findModel($compositor_id, $imagem_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'compositor_id' => $model->compositor_id, 'imagem_id' => $model->imagem_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CompositorImagem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $compositor_id
     * @param integer $imagem_id
     * @return mixed
     */
    public function actionDelete($compositor_id, $imagem_id)
    {
        $this->findModel($compositor_id, $imagem_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CompositorImagem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $compositor_id
     * @param integer $imagem_id
     * @return CompositorImagem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($compositor_id, $imagem_id)
    {
        if (($model = CompositorImagem::findOne(['compositor_id' => $compositor_id, 'imagem_id' => $imagem_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
