<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m220630_081119_users
 */
class m220630_081119_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220630_081119_users cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('users', [
            'id' => Schema::TYPE_BIGPK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'password' => Schema::TYPE_STRING . ' NOT NULL',
            'profile_photo' => Schema::TYPE_STRING . ' NOT NULL'
        ]);
    }

    public function down()
    {
        echo "m220630_081119_users cannot be reverted.\n";

        return false;
    }

}
