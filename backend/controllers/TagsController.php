<?php

namespace backend\controllers;

use Yii;
use common\models\Tags;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * TagsController implements the CRUD actions for Tags model.
 */
class TagsController extends BaseController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tags models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = Tags::find()->orderBy('id desc');
        $queryCount = clone $model;
        $pages = new Pagination(['totalCount' => $queryCount->count(), 'defaultPageSize' => 10]);
        $tags = $model->offset($pages->offset)
              ->limit($pages->limit)
              ->asArray()
              ->all();
        return $this->render('index', [
            'data' => $tags,
            'pages' => $pages
        ]);
    }

    /**
     * Displays a single Tags model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tags model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tags();
        if ( $params = Yii::$app->request->post() ) {
            $model->name = $params['name'];
            if ( $model->save() ) {
                return $this->redirect(['index']);
            } else {
                return $this->goBack();
            }
        } else {
            return $this->render('create');
        }
    }

    /**
     * Updates an existing Tags model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ( $params = Yii::$app->request->post() ) {
            $model->name = $params['name'];
            if ( $model->save() ) {
                return $this->redirect(['index']);
            } else {
                return $this->goBack();
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tags model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tags model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Tags the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tags::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
