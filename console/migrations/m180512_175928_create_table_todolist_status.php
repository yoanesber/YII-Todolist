<?php

use yii\db\Migration;

class m180512_175928_create_table_todolist_status extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('todolist_status', [
            'id'            => $this->primaryKey(),
            'status_name'   => $this->string(30)->notNull(),
            'status_desc'   => $this->string()
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('todolist_status');
    }
}
