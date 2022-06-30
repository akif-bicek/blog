<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m220630_081232_subscriptions
 */
class m220630_081232_subscriptions extends Migration
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
        echo "m220630_081232_subscriptions cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('subscriptions', [
            'id' => Schema::TYPE_BIGPK,
            'subscriber_id' => Schema::TYPE_BIGINT . ' NOT NULL',
            'user_id' => Schema::TYPE_BIGINT . ' NOT NULL'
        ]);
    }

    public function down()
    {
        echo "m220630_081232_subscriptions cannot be reverted.\n";

        return false;
    }

}
