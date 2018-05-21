<?php

use yii\db\Migration;

class m180512_180020_seeder_todolist_status extends Migration
{
   public function up()
    {
        $this->insert('todolist_status', [
            'status_name' => 'Completed',
            'status_desc' => 'The task has been completed.'
        ]);

        $this->insert('todolist_status', [
            'status_name' => 'Cancelled',
            'status_desc' => 'The task has been cancelled.'
        ]);

        $this->insert('todolist_status', [
            'status_name' => 'Postponed',
            'status_desc' => 'The task has been postponed.'
        ]);

        $this->insert('todolist_status', [
            'status_name' => 'In Progress',
            'status_desc' => 'The task is in progress.'
        ]);
    }

    public function down()
    {
        echo "m180512_180020_seeder_todolist_status cannot be reverted.\n";

        return false;
    }
}
