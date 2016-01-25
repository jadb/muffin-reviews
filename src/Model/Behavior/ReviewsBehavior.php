<?php
namespace Muffin\Reviews\Model\Behavior;

use Cake\Core\Exception\Exception;
use Cake\Datasource\EntityInterface;
use Cake\ORM\Behavior;

class ReviewsBehavior extends Behavior
{
    protected $_defaultConfig = [
        'implementedServices' => null,
        'implementedFinders' => [
            'withReviews' => 'findWithReviews',
        ],
        'implementedMethods' => [
            'toggle' => 'toggle',
            'review' => 'review',
            'unreview' => 'unreview',
        ],
    ];

    public function initialize(array $config)
    {
        $this->config('implementedServices', (array)$this->_resolveTypes($config['implementedServices']));

        $this->verifyConfig();
        $this->_bindAssociations();
        $this->_addBehaviorToTargets();
    }

    public function verifyConfig()
    {
        if ($this->config('implementedMethods') && !$this->config('implementedServices')) {
            throw new Exception('No reviews types defined.');
        }

        parent::verifyConfig();
    }

    public function findWithReviews(Query $query, array $options = [])
    {
        return $query;
    }

    public function toggle(EntityInterface $entity)
    {
        $limit = $this->config('implementedServices.' . $entity->source())->config('limit');
        if ($limit !== 1) {
            throw new Exception(sprintf(
                'Toggle disabled, type "%s" limit is "%s"',
                $entity->source(),
                $limit
            ));
        }

        // if current user in $entity->reviewed_by
        // if so goto unreview
        // else goto review
    }

    public function review(EntityInterface $entity, $score, $comment = null)
    {

    }

    public function unreview(EntityInterface $entity, $score, $comment = null)
    {
        return $this->review($entity, -$score, $comment);
    }

    protected function _addBehaviorToTargets()
    {
        $types = $this->config('implementedServices');
        foreach (array_keys($types) as $alias) {
            TableRegistry::get($alias)->addBehavior('Muffin/Reviews.Reviews', [
                'implementedServices' => false,
                'implementedMethods' => false,
                'implementedFinders' => [
                    'withFavoritedBy' => 'findWithFavoritedBy',
                ],
            ]);
        }
    }

    protected function _bindAssociations()
    {
        $types = $this->config('implementedServices');
        foreach ($types as $alias => $config) {
            // create binding on user table
            // create binding on reviewed table
            // create bindings on reviews pivot table
        }
    }

    protected function _resolveTypes(array $types)
    {
        foreach ($types as $type) {
            // merge default association configuration
            // merge default limit
        }
    }
}
