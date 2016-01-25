<?php
namespace Muffin\Reviews\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

class ReviewsHelper extends Helper
{
    public $_defaultConfig = [
        'linkOptions' => [],
        'templates' => [
        ],
    ];

    public function __construct(View $View, array $config)
    {
        $this->_defaultConfig['templates'] += [
            'link' => $this->Html->config('templates.link'),
        ];
        parent::__construct($View, $config);
    }

    /*
        UNSURE HOW TO CONTINUE
     */
}
