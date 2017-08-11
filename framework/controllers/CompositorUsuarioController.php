<?php

namespace app\controllers;

use Yii;
use app\models\CompositorUsuario;
use app\models\CompositorUsuarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CompositorUsuarioController implements the CRUD actions for CompositorUsuario model.
 */
class CompositorUsuarioController extends Controller
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
     * Lists all CompositorUsuario models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CompositorUsuarioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CompositorUsuario model.
     * @param integer $compositor_id
     * @param integer $usuario_id
     * @return mixed
     */
    public function actionView($compositor_id, $usuario_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($compositor_id, $usuario_id),
        ]);
    }

    /**
     * Creates a new CompositorUsuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CompositorUsuario();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'compositor_id' => $model->compositor_id, 'usuario_id' => $model->usuario_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CompositorUsuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $compositor_id
     * @param integer $usuario_id
     * @return mixed
     */
    public function actionUpdate($compositor_id, $usuario_id)
    {
        $model = $this->findModel($compositor_id, $usuario_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'compositor_id' => $model->compositor_id, 'usuario_id' => $model->usuario_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CompositorUsuario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $compositor_id
     * @param integer $usuario_id
     * @return mixed
     */
    public function actionDelete($compositor_id, $usuario_id)
    {
        $this->findModel($compositor_id, $usuario_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CompositorUsuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $compositor_id
     * @param integer $usuario_id
     * @return CompositorUsuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($compositor_id, $usuario_id)
    {
        if (($model = CompositorUsuario::findOne(['compositor_id' => $compositor_id, 'usuario_id' => $usuario_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
