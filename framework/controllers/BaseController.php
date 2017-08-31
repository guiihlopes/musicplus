<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class BaseController extends Controller
{
    public function beforeAction($action)
    {
        if (Yii::$app->user->identity !== null && Yii::$app->user->identity->perfil_id === 1) {
            $this->layout = 'adminMain';
        } elseif (Yii::$app->user->identity !== null && Yii::$app->user->identity->perfil_id === 2) {
            $this->layout = 'userMain';
        }
        return parent::beforeAction($action);
    }
}
