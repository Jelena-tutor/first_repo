<?php

use yii\db\Migration;

/**
 * Class m180913_115441_new_rbac
 */
class m180913_115441_new_rbac extends Migration
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
        echo "m180913_115441_new_rbac cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180913_115441_new_rbac cannot be reverted.\n";

        return false;
    }
    */
}
