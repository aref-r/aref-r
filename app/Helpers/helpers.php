<?php

namespace App\Helpers;

use App\Models\Admin;

class Helpers
{

    public function navasan($currency)
    {
        //API URL
        $api_url = "http://api.navasan.tech/latest/?api_key=" . Admin::pluck('navasan_api_key') . '&item=' . $currency;
        
        //create a new cURL resource
        $ch = curl_init($api_url);

        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute the POST request
        $result = json_decode(curl_exec($ch));

        //close cURL resource
        curl_close($ch);

        dd($result);
    }
}
