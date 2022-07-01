<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%subscriptions}}`.
 */
class m220630_114103_add_showed_column_to_subscriptions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //$this->addColumn('subscriptions', 'showed', Schema::TYPE_BOOLEAN . 'Default 0 AFTER user_id');
        $this->addColumn('subscriptions', 'showed', $this->boolean()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('subscriptions', 'showed');
    }
}
