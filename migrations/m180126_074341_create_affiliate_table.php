<?php

use app\helpers\MigrationHelper;
use yii\helpers\ArrayHelper;

/**
 * Handles the creation of table `affiliate`.
 */
class m180126_074341_create_affiliate_table extends MigrationHelper
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('affiliate', ArrayHelper::merge([
            'id' => $this->primaryKey(),
            'account_name' => $this->string()->notNull(),
            'account_login_link' => $this->string()->notNull(),
            'account_username' => $this->string()->notNull(),
            'account_password' => $this->string()->notNull(),
        ], $this->getAdditionalColumns()));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('affiliate');
    }
}
