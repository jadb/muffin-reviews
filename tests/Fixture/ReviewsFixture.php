<?php
namespace Muffin\Reviews\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class ReviewsFixture extends TestFixture
{
    public $table = 'reviews_reviews';

    public $fields = [
        'id' => ['type' => 'integer', 'signed' => false, 'autoIncrement' => true],
        'reviewer_table' => ['type' => 'string', 'length' => 64],
        'reviewer_alias' => ['type' => 'string', 'length' => 64],
        'reviewer_key' => ['type' => 'integer', 'signed' => false],
        'reviewed_table' => ['type' => 'string', 'length' => 64],
        'reviewed_alias' => ['type' => 'string', 'length' => 64],
        'reviewed_key' => ['type' => 'integer', 'signed' => false],
        'comment' => ['type' => 'text'],
        'created' => ['type' => 'datetime'],
        '_constraints' => [
            'PRIMARY' => ['type' => 'primary', 'columns' => ['id']],
        ]
    ];

    public $records = [
        [
            'user_table' => 'favorites_users',
            'user_alias' => 'Users',
            'user_key' => 1,
            'favorited_table' => 'favorites_cakes',
            'favorited_alias' => 'Cakes',
            'favorited_key' => 1,
        ],
        [
            'user_table' => 'favorites_users',
            'user_alias' => 'Users',
            'user_key' => 1,
            'favorited_table' => 'favorites_cakes',
            'favorited_alias' => 'Cakes',
            'favorited_key' => 2,
        ],
        [
            'user_table' => 'favorites_users',
            'user_alias' => 'Users',
            'user_key' => 2,
            'favorited_table' => 'favorites_cakes',
            'favorited_alias' => 'Cakes',
            'favorited_key' => 2,
        ],
    ];

    public function init()
    {
        foreach ($records as &$record) {
            $record['created'] = date('Y-m-d H:i:s');
        }
        parent::init();
    }
}
