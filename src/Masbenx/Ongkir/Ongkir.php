<?php namespace Masbenx\Ongkir;

/**
 * Created by PhpStorm.
 * User: prasetyoherlambang
 * Date: 11/3/14
 * Time: 3:51 PM
 */

use Illuminate\Config\Repository;
use Illuminate\Support\Facades\Config;

class Ongkir {

    public static function getCity()
    {
        $rest = new REST_Ongkir(array('server' => 'http://api.ongkir.info/'));

        $result = $rest->post('city/list', array(
            'query' 	=> 'band',
            'type' 	=> 'origin',
            'courier' 	=> 'jne',
            'API-Key' 	=> Config::get('ongkir::API-Key')
        ));

        try
        {
            $status = $result['status'];

            // Handling the data
            if ($status->code == 0)
            {
                return $cities = $result['cities'];

            }
            else
            {
                return null;
            }

        }
        catch (Exception $e)
        {
            return null;
        }
    }

    public static function getCost($from, $to, $weight)
    {
        $rest = new REST_Ongkir(['server'=>'http://api.ongkir.info/']);

        $result = $rest->post('cost/find', array(
            'from' 	    => $from,
            'to' 		=> $to,
            'weight'	=> $weight,
            'courier'	=> 'jne',
            'API-Key' 	=> Config::get('ongkir::API-Key')
        ));

        try
        {
            $status = $result['status'];

            // Handling the data
            if ($status->code == 0)
            {
                return $result;
            }
            else
            {
                return null;
            }

        }
        catch (Exception $e)
        {
            return null;
        }
    }
}