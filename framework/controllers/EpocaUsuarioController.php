<?php

namespace app\controllers;

use Yii;
use app\models\EpocaUsuario;
use app\models\EpocaUsuarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EpocaUsuarioController implements the CRUD actions for EpocaUsuario model.
 */
class EpocaUsuarioController extends Controller
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
     * Lists all EpocaUsuario models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EpocaUsuarioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EpocaUsuario model.
     * @param integer $epoca_id
     * @param integer $usuario_id
     * @return mixed
     */
    public function actionView($epoca_id, $usuario_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($epoca_id, $usuario_id),
        ]);
    }

    /**
     * Creates a new EpocaUsuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EpocaUsuario();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'epoca_id' => $model->epoca_id, 'usuario_id' => $model->usuario_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing EpocaUsuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $epoca_id
     * @param integer $usuario_id
     * @return mixed
     */
    public function actionUpdate($epoca_id, $usuario_id)
    {
        $model = $this->findModel($epoca_id, $usuario_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'epoca_id' => $model->epoca_id, 'usuario_id' => $model->usuario_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EpocaUsuario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $epoca_id
     * @param integer $usuario_id
     * @return mixed
     */
    public function actionDelete($epoca_id, $usuario_id)
    {
        $this->findModel($epoca_id, $usuario_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EpocaUsuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $epoca_id
     * @param integer $usuario_id
     * @return EpocaUsuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($epoca_id, $usuario_id)
    {
        if (($model = EpocaUsuario::findOne(['epoca_id' => $epoca_id, 'usuario_id' => $usuario_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
