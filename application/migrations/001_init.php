<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Init extends CI_Migration {
  public function up()
  {
    $this->dbforge->add_field(
      array(
        'id' => array(
          'type' => 'INT',
          'auto_increment' => TRUE
        ),
        'user_id' => array(
          'type' => 'INT'
        ),
        'title' => array(
          'type' => 'VARCHAR'
        ),
        'body' => array(
          'type' => 'VARCHAR'
        ),
        'created_at' => array(
          'type' => 'TIMESTAMP',
          'default' => 'now()'
        ),
        'updated_at' => array(
          'type' => 'TIMESTAMP',
          'default' => 'now()'
        )
      )
    );
    $this->dbforge->create_table('entries');

    $this->dbforge->add_field(
      array(
        'id' => array(
          'type' => 'INT',
          'auto_increment' => TRUE
        ),
        'user_id' => array(
          'type' => 'INT'
        ),
        'entry_id' => array(
          'type' => 'INT'
        ),
        'author' => array(
          'type' => 'VARCHAR'
        ),
        'body' => array(
          'type' => 'VARCHAR'
        ),
        'created_at' => array(
          'type' => 'TIMESTAMP',
          'default' => 'now()'
        ),
        'updated_at' => array(
          'type' => 'TIMESTAMP',
          'default' => 'now()'
        )
      )
    );
    $this->dbforge->create_table('comments');

  }

  public function down()
  {
    $this->dbforge->drop_table('entries');
    $this->dbforge->drop_table('comments');
  }
}
