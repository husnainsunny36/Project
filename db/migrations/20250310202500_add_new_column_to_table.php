<?php
use Phinx\Migration\AbstractMigration;

class AddNewColumnToTable extends AbstractMigration
{
    public function up()
    {
        // Adding a new column to the test table
        $table = $this->table('test');
        $table->addColumn('job_title', 'string', ['limit' => 15, 'null' => true])
              ->update();
    }

    public function down()
    {
        // Rolling back the changes: dropping the job_title column
        $table = $this->table('test');
        $table->removeColumn('Job_Title')
              ->update();
    }
}
