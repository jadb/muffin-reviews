<?php
namespace Muffin\Reviews\Service\Strategy;

use Cake\Datasource\EntityInterface;

interface StrategyInterface
{
    public function review(EntityInterface $reviewer, EntityInterface $entity, $score, $comment = null);
}
