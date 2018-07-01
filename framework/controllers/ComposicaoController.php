<?php

namespace app\controllers;

use Yii;
use app\models\Composicao;
use app\models\ComposicaoSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ComposicaoController implements the CRUD actions for Composicao model.
 */
class ComposicaoController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'update', 'create', 'delete'],
                'rules' => [
                    [
                        'actions' => ['index', 'update', 'create', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return (Yii::$app->user->identity !== null && Yii::$app->user->identity->perfil_id === 1);
                        }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Composicao models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ComposicaoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Composicao model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionFavoritos() {

        $dataProvider = new ActiveDataProvider([
            'query' => Yii::$app->user->identity->getComposicaos()
        ]);

        return $this->render('/composicao/favoritos', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionFavorito($id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $usuario_id = Yii::$app->user->identity->id;

        $model = new \app\models\ComposicaoUsuario();

        $model->usuario_id = $usuario_id;
        $model->composicao_id = $id;
        try {
            $model->save();
            return true;
        } catch (\yii\base\Exception $exception) {
            $model = $model->find()->where(['usuario_id' => $usuario_id])->andWhere(['composicao_id' => $id])->one();
            $model->delete();
            return "deleted";
        }
    }

    public function actionInformacoes($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Composicao model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Composicao();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Composicao model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Composicao model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Composicao model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Composicao the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Composicao::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
