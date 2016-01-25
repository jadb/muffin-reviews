<?php
namespace Muffin\Reviews\Service\Strategy;

use Cake\Core\Exception\Exception;
use Cake\Datasource\EntityInterface;

class ReviewStrategy extends RateStrategy
{
    public function review(EntityInterface $reviewer, EntityInterface $entity, $score, $comment = null)
    {
        if ($comment === null) {
            throw new Exception('Missing review comment');
        }

        parent::review($reviewer, $entity, $score, $comment); // TODO: Change the autogenerated stub
    }

}