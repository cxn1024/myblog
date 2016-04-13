<?php

namespace backend\controllers;

use Yii;
use common\models\Articles;
use common\models\ArticlesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * ArticlesController implements the CRUD actions for Articles model.
 */
class ArticlesController extends BaseController
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
     * Lists all Articles models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticlesSearch();
        $query = $searchModel->search(Yii::$app->request->queryParams)->with('user')->orderBy('create_time desc');
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $data = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'data' => $data,
            'pages' => $pages
        ]);
    }

    /**
     * Creates a new Articles model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Articles();

        if ( $params = Yii::$app->request->post() ) {
            $model->title = $params['title'];
            $model->tags = $params['tags'];
            $model->category_id = $params['category_id'];
            $model->content = $params['content'];
            $model->status = 1;
            $model->create_time = time();
            $model->update_time = time();
            $model->author_id = Yii::$app->user->id;
            if ( $model->save() ) {
                return $this->redirect(['index']);
            } else {
                return $this->goBack();
            }
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Articles model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ( $params = Yii::$app->request->post() ) {
            $model->title = $params['title'];
            $model->tags = $params['tags'];
            $model->category_id = $params['category_id'];
            $model->content = $params['content'];
            $model->update_time = time();
            if ( $model->save() ) {
                return $this->redirect(['index']);
            } else {
                return $this->goBack();
            }
            // return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Articles model.
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
     * Finds the Articles model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Articles the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Articles::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
