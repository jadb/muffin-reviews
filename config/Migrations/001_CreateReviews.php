<?php

use Migrations\AbstractMigration;

class CreateReviews extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('favorites_favorites', [
            'id' => false,
            'primary_key' => 'id',
        ]);
        $table->addColumn('id', 'integer', [
            'signed' => false,
            'identity' => true,
        ]);
        $table->addColumn('user_table', 'string', [
            'length' => 64,
            'null' => false,
        ]);
        $table->addColumn('user_alias', 'string', [
            'length' => 64,
            'null' => false,
        ]);
        $table->addColumn('user_key', 'integer', [
            'signed' => false,
            'null' => false,
        ]);
        $table->addColumn('favorited_table', 'string', [
            'length' => 64,
            'null' => false,
        ]);
        $table->addColumn('favorited_alias', 'string', [
            'length' => 64,
            'null' => false,
        ]);
        $table->addColumn('favorited_key', 'integer', [
            'signed' => false,
            'null' => false,
        ]);
        $table->addColumn('comment', 'text');
        $table->addColumn('created', 'datetime', [
            'null' => false,
        ]);
    }
}
