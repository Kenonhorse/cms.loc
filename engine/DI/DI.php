<?php

namespace Engine\DI;

/**
 * Class DI
 * @package Engine\DI
 */
class DI
{
    /**
     * @var array
     */
    private $container=[];

    /**
     * @return array
     */
    public function set($key, $value)
    {
        $this->container[$key]=$value;
        return $this;

    }

    /**
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->container[$key];
    }

    /**
     * @param $key
     * @return bool
     */
    public function has($key)
    {
        return isset($this->container[$key]) ? $this->container[$key]: null ;
    }
}