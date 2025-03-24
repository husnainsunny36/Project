<?php

use Phinx\Migration\AbstractMigration;

class CreateMonsterTable extends AbstractMigration
{
    public function up()
    {
        // Creating the 'monster' table
        $table = $this->table('monster');
        $table->addColumn('Name', 'string', ['limit' => 20, 'null' => false]) 
              ->addColumn('Image', 'binary', ['null' => false]) 
              ->addColumn('Audio', 'binary', ['null' => false]) 
              ->addColumn('id', 'integer', ['auto_increment' => true, 'null' => false]) 
              ->addIndex('id', ['unique' => true]) 
              ->create(); // Create the table in the database
    }

    public function down()
    {
        // Dropping the 'monster' table if we want to rollback the migration
        $this->table('monster')->drop()->save();
    }
}
