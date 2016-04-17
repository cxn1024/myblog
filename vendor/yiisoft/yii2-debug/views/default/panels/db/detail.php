<?php
/* @var $panel yii\debug\panels\DbPanel */
/* @var $searchModel yii\debug\models\search\Db */
/* @var $dataProvider yii\data\ArrayDataProvider */

use yii\helpers\Html;
use yii\grid\GridView;
<<<<<<< HEAD

?>
<h1><?= $panel->getName(); ?> Queries</h1>

<?php
=======
use yii\web\View;

echo Html::tag('h1', $panel->getName() . ' Queries');
>>>>>>> 234dd934ca10be5c3637987017ccf21e8d5da76e

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'id' => 'db-panel-detailed-grid',
    'options' => ['class' => 'detail-grid-view table-responsive'],
    'filterModel' => $searchModel,
    'filterUrl' => $panel->getUrl(),
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute' => 'seq',
            'label' => 'Time',
            'value' => function ($data) {
                $timeInSeconds = $data['timestamp'] / 1000;
                $millisecondsDiff = (int) (($timeInSeconds - (int) $timeInSeconds) * 1000);

                return date('H:i:s.', $timeInSeconds) . sprintf('%03d', $millisecondsDiff);
            },
            'headerOptions' => [
                'class' => 'sort-numerical'
            ]
        ],
        [
            'attribute' => 'duration',
            'value' => function ($data) {
                return sprintf('%.1f ms', $data['duration']);
            },
            'options' => [
                'width' => '10%',
            ],
            'headerOptions' => [
                'class' => 'sort-numerical'
            ]
        ],
        [
            'attribute' => 'type',
            'value' => function ($data) {
<<<<<<< HEAD
                return Html::encode(mb_strtoupper($data['type'], 'utf8'));
=======
                return Html::encode($data['type']);
>>>>>>> 234dd934ca10be5c3637987017ccf21e8d5da76e
            },
            'filter' => $panel->getTypes(),
        ],
        [
            'attribute' => 'query',
<<<<<<< HEAD
            'value' => function ($data) {
=======
            'value' => function ($data) use ($hasExplain, $panel) {
>>>>>>> 234dd934ca10be5c3637987017ccf21e8d5da76e
                $query = Html::encode($data['query']);

                if (!empty($data['trace'])) {
                    $query .= Html::ul($data['trace'], [
                        'class' => 'trace',
                        'item' => function ($trace) {
                            return "<li>{$trace['file']} ({$trace['line']})</li>";
                        },
                    ]);
                }

<<<<<<< HEAD
=======
                if ($hasExplain && $panel::canBeExplained($data['type'])) {
                    $query .= Html::tag('p', '', ['class' => 'db-explain-text']);

                    $query .= Html::tag(
                        'div',
                        Html::a('[+] Explain', (['db-explain', 'seq' => $data['seq'], 'tag' => Yii::$app->controller->summary['tag']])),
                        ['class' => 'db-explain']
                    );
                }

>>>>>>> 234dd934ca10be5c3637987017ccf21e8d5da76e
                return $query;
            },
            'format' => 'html',
            'options' => [
                'width' => '60%',
            ],
        ]
    ],
]);
<<<<<<< HEAD
=======

if ($hasExplain) {
    echo Html::tag(
        'div',
        Html::a('[+] Explain all', '#'),
        ['id' => 'db-explain-all']
    );
}

$this->registerJs('debug_db_detail();', View::POS_READY);
?>

<script>
function debug_db_detail() {
    $('.db-explain a').on('click', function(e) {
        e.preventDefault();
        
        var $explain = $('.db-explain-text', $(this).parent().parent());

        if ($explain.is(':visible')) {
            $explain.hide();
            $(this).text('[+] Explain');
        } else {
            $explain.load($(this).attr('href')).show();
            $(this).text('[-] Explain');
        }
    });

    $('#db-explain-all a').on('click', function(e) {
        e.preventDefault();
        
        $('.db-explain a').click();
    });
}
</script>
>>>>>>> 234dd934ca10be5c3637987017ccf21e8d5da76e
