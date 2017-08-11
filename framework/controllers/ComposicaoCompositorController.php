<?php

namespace app\controllers;

use Yii;
use app\models\ComposicaoCompositor;
use app\models\ComposicaoCompositorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ComposicaoCompositorController implements the CRUD actions for ComposicaoCompositor model.
 */
class ComposicaoCompositorController extends Controller
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
     * Lists all ComposicaoCompositor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ComposicaoCompositorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ComposicaoCompositor model.
     * @param integer $composicao_id
     * @param integer $compositor_id
     * @return mixed
     */
    public function actionView($composicao_id, $compositor_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($composicao_id, $compositor_id),
        ]);
    }

    /**
     * Creates a new ComposicaoCompositor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ComposicaoCompositor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'composicao_id' => $model->composicao_id, 'compositor_id' => $model->compositor_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ComposicaoCompositor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $composicao_id
     * @param integer $compositor_id
     * @return mixed
     */
    public function actionUpdate($composicao_id, $compositor_id)
    {
        $model = $this->findModel($composicao_id, $compositor_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'composicao_id' => $model->composicao_id, 'compositor_id' => $model->compositor_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ComposicaoCompositor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $composicao_id
     * @param integer $compositor_id
     * @return mixed
     */
    public function actionDelete($composicao_id, $compositor_id)
    {
        $this->findModel($composicao_id, $compositor_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ComposicaoCompositor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $composicao_id
     * @param integer $compositor_id
     * @return ComposicaoCompositor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($composicao_id, $compositor_id)
    {
        if (($model = ComposicaoCompositor::findOne(['composicao_id' => $composicao_id, 'compositor_id' => $compositor_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
