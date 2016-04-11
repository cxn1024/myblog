<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;


class BaseController extends Controller
{
	public function beforeAction($action)
	{
		if ( \Yii::$app->user->isGuest ) {
			return $this->redirect(['site/login']);
		}
		return true;
	}
}