<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m220630_082648_post_images
 */
class m220630_082648_post_images extends Migration
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
        echo "m220630_082648_post_images cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('post_images', [
            'id' => Schema::TYPE_BIGPK,
            'post_id' => Schema::TYPE_BIGINT . ' NOT NULL',
            'image' => Schema::TYPE_STRING . ' NOT NULL'
        ]);
    }

    public function down()
    {
        echo "m220630_082648_post_images cannot be reverted.\n";

        return false;
    }

}
