<?php
use Phinx\Migration\AbstractMigration;

class AddStatusToTestTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('test');
        $table->addColumn('status', 'string', ['default' => 'active'])
              ->update();
    }
}