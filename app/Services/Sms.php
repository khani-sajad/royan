<?php

namespace App\Services;

use GuzzleHttp\Client;

class Sms {

    //TODO : we can store sms setting in database

    private static $url = 'https://rest.payamak-panel.com/api/';

    private static $username = '9352910070';
    private static $password = '2076';
    private static $from = '30007305';
    private static $isflash = true;

    public static function send($mobile,$text) {

        $client = new Client();
        $json_response = $client->post(self::$url.'SendSMS/SendSMS',[
            'json' => [
                'TO' => $mobile,
                'TEXT' => $text,
                'UserName' => self::$username,
                'PassWord' => self::$password,
                'From' => self::$from,
                'IsFlash' => self::$isflash,
            ]
        ])->getBody();
        $response = json_decode($json_response);

        return ($response->RetStatus === 1);
    }

}