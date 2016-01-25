<?php
namespace Muffin\Reviews\Service\Strategy;

class StarStrategy extends RateStrategy
{

    public function __construct(array $config)
    {
        $this->config($config + [
            'limit' => 1,
            'maxWeight' => 5,
        ]);
    }

}
