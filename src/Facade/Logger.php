<?php
namespace ZfMetal\Commons\Facade\Service;

use ZfMetal\Commons\Facade\Accessor;

class Logger extends Accessor
{

    public static function getServiceName()
    {
        return 'zf-metal.log';
    }

}