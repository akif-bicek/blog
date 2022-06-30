<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m220629_133851_posts
 */
class m220629_133851_posts extends Migration
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
        echo "m220629_133851_posts cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('posts', [
            'id' => Schema::TYPE_BIGPK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'user_id' => Schema::TYPE_BIGINT . ' NOT NULL'
        ]);
    }

    public function down()
    {
        echo "m220629_133851_posts cannot be reverted.\n";

        return false;
    }

}
