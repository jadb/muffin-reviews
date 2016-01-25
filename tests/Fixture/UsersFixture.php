<?php
namespace Muffin\Reviews\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class UsersFixture extends TestFixture
{
    public $table = 'favorites_users';

    public $fields = [
        'id' => ['type' => 'integer', 'signed' => false, 'autoIncrement' => true],
        'username' => ['type' => 'string', 'length' => 64],
        '_constraints' => [
            'PRIMARY' => ['type' => 'primary', 'columns' => ['id']],
        ]
    ];

    public $records = [
        ['username' => 'jadb'],
        ['username' => 'ADmad'],
    ];
}
