<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "xzg_user".
 *
 * @property string $id
 * @property integer $type
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $reg_time
 * @property integer $last_login_time
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xzg_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email'], 'required'],
            [['username'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 40],
            [['email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => '类型',
            'username' => '用户名  ',
            'password' => '密码',
            'email' => '邮箱',
            'reg_time' => '注册时间',
            'last_login_time' => '最后一次登陆时间',
        ];
    }
}
