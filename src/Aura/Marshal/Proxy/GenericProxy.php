<?php
namespace Aura\Marshal\Proxy;

use Aura\Marshal\Relation\RelationInterface;

class GenericProxy implements ProxyInterface
{
    protected $relation;
    
    public function __construct(RelationInterface $relation)
    {
        $this->relation = $relation;
    }
    
    public function get($entity)
    {
        return $this->relation->getForEntity($entity);
    }
}