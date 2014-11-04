<?php namespace Masbenx\Ongkir\Facades;
/**
 * Created by PhpStorm.
 * User: prasetyoherlambang
 * Date: 11/3/14
 * Time: 9:38 PM
 */

use Illuminate\Support\Facades\Facade;

class Ongkir extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'ongkir'; }

}