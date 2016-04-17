<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "xzg_tags".
 *
 * @property string $id
 * @property string $name
 * @property integer $hits
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xzg_tags';
    }

}
