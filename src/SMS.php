<?php
namespace Puzzley\SMS;

use Illuminate\Support\Facades\Facade;

class SMS extends Facade
{
    protected static function getFacadeAccessor()
    { 
        return 'sms';
    }
}
