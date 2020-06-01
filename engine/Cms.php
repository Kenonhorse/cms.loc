<?php

namespace Engine;

/**
 * Class Cms
 * @package Engine
 */
class Cms
{
    /**
     * @var
     */
    private $di;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;

    }

    /**
     *
     */
    public function run()
    {
       // $db=$this->di->get('test2');

        print_r($this->di);
    }


}