<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Engine\Cms;
use Engine\DI\DI;

try{
    $di = new DI();

    $di->set('test',['db'=>'db_object']);
    $di->set('test2',['mail'=>'mail_object']);

    $services= require __DIR__ . '/Config/Service.php';

    //Inir services
    foreach($services as $service)
    {
        $provider = new $service($di);
        $provider->init();
    }
    $cms = new Cms($di);
    $cms->run();
    
}catch (\ErrorException $e)
{
    echo $e->getMessage();
}
