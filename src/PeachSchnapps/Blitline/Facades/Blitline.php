<?php
namespace PeachSchnapps\Blitline\Facades;
use Illuminate\Support\Facades\Facade;

class Blitline extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
    	return 'blitline';
    }

}