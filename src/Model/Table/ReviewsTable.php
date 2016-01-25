<?php
namespace Muffin\Reviews\Model\Table;

use Cake\ORM\Table;

class ReviewsTable extends Table
{
    public function initialize(array $config)
    {
        $this->primaryKey('id');
        $this->table('reviews_reviews');
        $this->addBehavior('Timestamp');
    }
}
