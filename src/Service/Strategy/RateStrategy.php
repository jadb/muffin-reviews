<?php
namespace Muffin\Reviews\Service\Strategy;

use Cake\Core\InstanceConfigTrait;
use Cake\Datasource\EntityInterface;

class RateStrategy implements StrategyInterface
{

    use InstanceConfigTrait;

    protected $_defaultConfig = [
        'limit' => 1,
        'weight' => 1,
        'minWeight' => 0,
        'maxWeight' => 10,
        'totalWeight' => 0,
    ];

    public function __construct(array $config)
    {
        $this->config($config);
    }

    public function review(EntityInterface $reviewer, EntityInterface $entity, $score, $comment = null)
    {
        // TODO: Implement review() method.
    }

}
