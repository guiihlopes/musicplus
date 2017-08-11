<?php

namespace app\controllers;

use Yii;
use app\models\ComposicaoUsuario;
use app\models\ComposicaoUsuarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ComposicaoUsuarioController implements the CRUD actions for ComposicaoUsuario model.
 */
class ComposicaoUsuarioController extends Controller
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
     * Lists all ComposicaoUsuario models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ComposicaoUsuarioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ComposicaoUsuario model.
     * @param integer $composicao_id
     * @param integer $usuario_id
     * @return mixed
     */
    public function actionView($composicao_id, $usuario_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($composicao_id, $usuario_id),
        ]);
    }

    /**
     * Creates a new ComposicaoUsuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ComposicaoUsuario();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'composicao_id' => $model->composicao_id, 'usuario_id' => $model->usuario_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ComposicaoUsuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $composicao_id
     * @param integer $usuario_id
     * @return mixed
     */
    public function actionUpdate($composicao_id, $usuario_id)
    {
        $model = $this->findModel($composicao_id, $usuario_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'composicao_id' => $model->composicao_id, 'usuario_id' => $model->usuario_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ComposicaoUsuario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $composicao_id
     * @param integer $usuario_id
     * @return mixed
     */
    public function actionDelete($composicao_id, $usuario_id)
    {
        $this->findModel($composicao_id, $usuario_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ComposicaoUsuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $composicao_id
     * @param integer $usuario_id
     * @return ComposicaoUsuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($composicao_id, $usuario_id)
    {
        if (($model = ComposicaoUsuario::findOne(['composicao_id' => $composicao_id, 'usuario_id' => $usuario_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
