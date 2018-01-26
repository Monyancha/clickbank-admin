<?php

namespace app\helpers;

use yii\db\Migration;

/**
 * MigrationHelper class defines supporting logic for Migrations
 * 
 * @author Henry Ohanga <ohanga.henry@gmail.com>
 * @since 1.0
 */
class MigrationHelper extends Migration
{
    /**
     * Defines additional columns for blameable and time behaviors
     * 
     * @return array
     */
    public function getAdditionalColumns()
    {
        return [
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),

            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ];
    }
}
