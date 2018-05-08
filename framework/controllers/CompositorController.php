<?php

namespace app\controllers;

use Yii;
use app\models\Compositor;
use app\models\Composicao;
use app\models\CompositorSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * CompositorController implements the CRUD actions for Compositor model.
 */
class CompositorController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'update', 'create', 'view', 'delete'],
                'rules' => [
                    [
                        'actions' => ['index', 'update', 'create', 'view', 'delete'],
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
     * Lists all Compositor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CompositorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Compositor model.
     * @param integer $id
     * @return mixed
     */
    public function actionInformacoes($id)
    {
        $compositor = $this->findModel($id);
        $musics = new ActiveDataProvider([
            'query' => Composicao::find()->where(['compositor_id' => $id])
        ]);
        return $this->render('view', [
            'musics' => $musics,
            'model' => $compositor,
        ]);
    }

    /**
     * Creates a new Compositor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Compositor();

        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'imagem_principal');
            $fileName = $file->name;
            $extension = $file->getExtension();
            $model->imagem_principal = 'uploads/' . md5($fileName + time()) . "." . $extension;
            if ($model->validate()) {
                $model->save();
                $file->saveAs($model->imagem_principal);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Compositor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionFavorito($id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $usuario_id = Yii::$app->user->identity->id;

        $model = new \app\models\CompositorUsuario();

        $model->usuario_id = $usuario_id;
        $model->compositor_id = $id;
        try {
            $model->save();
            return true;
        } catch (\yii\base\Exception $exception) {
            return false;
        }
    }

    /**
     * Deletes an existing Compositor model.
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
     * Finds the Compositor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Compositor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Compositor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
