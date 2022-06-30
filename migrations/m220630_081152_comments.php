<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m220630_081152_comments
 */
class m220630_081152_comments extends Migration
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
        echo "m220630_081152_comments cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('comments', [
            'id' => Schema::TYPE_BIGPK,
            'comment' => Schema::TYPE_STRING . ' NOT NULL',
            'post_id' => Schema::TYPE_BIGINT . ' NOT NULL',
            'user_id' => Schema::TYPE_BIGINT . ' NOT NULL'
        ]);
    }

    public function down()
    {
        echo "m220630_081152_comments cannot be reverted.\n";

        return false;
    }

}
