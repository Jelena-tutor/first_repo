<?php

use yii\db\Migration;

/**
 * Handles the creation of table `testik`.
 */
class m200219_154632_create_testik_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('testik', [
            'id' => $this->primaryKey(),
			'title'=>$this->string(),
			'description'=>$this->text(),
			'comment'=>$this->text(),
			'date'=>$this->date(),
			'image'=>$this->string(),
			'viewed'=>$this->integer(),
			'user_id'=>$this->integer(),
			'status'=>$this->integer(),
			'category'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('testik');
    }
}
