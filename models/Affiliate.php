<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "affiliate".
 *
 * @property int $id
 * @property string $account_name
 * @property string $account_login_link
 * @property string $account_username
 * @property string $account_password
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Affiliate extends \app\models\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'affiliate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_name', 'account_login_link', 'account_username', 'account_password'], 'required'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['account_name', 'account_login_link', 'account_username', 'account_password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'account_name' => 'Account Name',
            'account_login_link' => 'Account Login Link',
            'account_username' => 'Account Username',
            'account_password' => 'Account Password',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
