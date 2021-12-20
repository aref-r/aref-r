<?php

namespace App\Helpers;

use App\Models\Currency;

class Helpers
{

    public function navasan()
    {
        //API URL
        // $api_url = "http://api.navasan.tech/latest/?api_key=" . 'freebY6P9QDXwlFfP62aE1A07E5DMhSG';
        $api_url = "http://paypooler.webflaxco.ir/public/json/tech.json"; // fake url instead
        
        //create a new cURL resource
        $ch = curl_init($api_url);

        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute the request
        $result = json_decode(curl_exec($ch),true);

        //close cURL resource
        curl_close($ch);

        //delete all table content if json is not null
        if(!is_null($result)){
            Currency::truncate();
        }

        //insert currency rows
        foreach($result as $key => $value){
            if (!isset($value['value'])){
                continue;
            }
        $currency = new Currency([
            'name' => $key,
            'symbol' => $key,
            'value' => $value['value']
        ]);
        $currency->save();
        }        
    }
}
