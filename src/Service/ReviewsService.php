<?php
namespace Muffin\Reviews\Service;

use Cake\Datasource\EntityInterface;
use Muffin\Reviews\Service\Strategy\StrategyInterface;

class ReviewsService
{

    protected $_strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->_strategy = $strategy;
    }

    public function strategy()
    {
        return $this->_strategy;
    }

    public function review(EntityInterface $reviewer, EntityInterface $reviewed, $score, $comment)
    {
        return $this->_strategy->review($reviewer, $reviewed, $score, $comment);
    }
}
