<?php
namespace Muffin\Reviews\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class CakesFixture extends TestFixture
{
    public $table = 'favorites_cakes';

    public $fields = [
        'id' => ['type' => 'integer', 'signed' => false, 'autoIncrement' => true],
        'name' => ['type' => 'string', 'length' => 64],
        '_constraints' => [
            'PRIMARY' => ['type' => 'primary', 'columns' => ['id']],
        ]
    ];

    public $records = [
        ['name' => 'cup'],
        ['name' => 'pie']
    ];

}
