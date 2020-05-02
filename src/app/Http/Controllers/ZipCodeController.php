<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ZipCodeController extends Controller
{
    public function complement($zipcode)
    {
        $curl = curl_init();
        $option = [
            CURLOPT_URL => 'https://zip-cloud.appspot.com/api/search?zipcode=' . $zipcode,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_SSL_VERIFYPEER => false
        ];
        curl_setopt_array($curl, $option);
        $response = curl_exec($curl);
        $result = json_decode($response, true);
        curl_close($curl);

        return $result;
    }
}
