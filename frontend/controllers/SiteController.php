<?php
namespace frontend\controllers;

use Yii;
use common\models\Articles;
use common\models\Tags;
use yii\web\Controller;
use yii\data\Pagination;

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
                'view' => '@common/views/404.php'
            ]
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $params = Yii::$app->request->get('tags');
        $query = Articles::find()->with('user')->where(['status' => 1])->orderBy('create_time desc');
        if ($params) {
            $query->andWhere(['like', 'tags', $params]);
        }
        $queryCount = clone $query;
        $pages = new Pagination(['totalCount' => $queryCount->count(), 'defaultPageSize' => 10]);
        $articles = $query->offset($pages->offset)
                  ->limit($pages->limit)
                  ->asArray()->all();
        $hotArticles = Articles::find()->where(['status' => 1])->orderBy('hits desc')->limit(5)->asArray()->all();
        $hotTags = Tags::find()->orderBy('hits desc')->limit(10)->asArray()->all();
        return $this->render('index', [
            'articles' => $articles,
            'pages' => $pages,
            'hot' => $hotArticles,
            'tags' => $hotTags
        ]);
    }

    public function actionView($id)
    {
        $article = Articles::findOne($id);
        $article->tags = explode(',', $article->tags);
        $hotArticles = Articles::find()->where(['status' => 1])->orderBy('hits desc')->limit(5)->asArray()->all();
        $hotTags = Tags::find()->orderBy('hits desc')->limit(10)->asArray()->all();
        return $this->render('view', [
            'article' => $article,
            'hot' => $hotArticles,
            'tags' => $hotTags
        ]);
    }
    
    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
