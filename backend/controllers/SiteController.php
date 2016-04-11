<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use common\models\LoginForm;
use backend\models\Admin;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        if ( \Yii::$app->user->isGuest ) {
            return $this->redirect(['site/login']);
        }
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->redirect(['site/index']);
        }

        $model = new LoginForm();
        if ($params = Yii::$app->request->post()) {
            $username = $params['LoginForm']['username'];
            $password = md5( $params['LoginForm']['password'] );
            $result = Admin::findOne(['username' => $username, 'password' => $password, 'type' => 2]);
            if ($result && Yii::$app->user->login($result)) {
                return $this->redirect(['site/index']);
            } else {
                return $this->redirect(['site/login']);
            }
        } else {
            return $this->renderPartial('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['site/login']);
    }
}
