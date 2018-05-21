<?php

use yii\db\Migration;

class m180512_180028_create_table_todolist extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('todolist', [
            'id'        => $this->primaryKey(),
            'task_name' => $this->string()->notNull(),
            'task_desc' => $this->text(),
            'status_id' => $this->integer(),
            'task_start_date' => $this->dateTime()->notNull(),
            'task_end_date' => $this->dateTime(),
            'task_place' => $this->string(),
            'createdAt' => $this->dateTime()->notNull()->defaultValue(date('Y-m-d H:i:s')),
            'createdBy' => $this->integer()->notNull()->defaultValue(1),
            'updatedAt' => $this->dateTime(),
            'updatedBy' => $this->integer()
        ], $tableOptions);

        $this->addForeignKey(
            'fk_todolist_status_id',
            'todolist',
            'status_id',
            'todolist_status',
            'id',
            'NO ACTION'
        );
    }

    public function down()
    {
        echo "m180512_180028_create_table_todolist cannot be reverted.\n";

        return false;
    }
}
