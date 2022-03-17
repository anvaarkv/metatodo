<?php

function utcToLocal($datetime, $timezone = 'Asia/Karachi', $format = 'Y-m-d H:i:s')
{
    $datetime = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $datetime, 'UTC');
    $datetime->tz($timezone);
    return $datetime;
}

function localToUtc($datetime, $timezone = 'Asia/Karachi',$format = 'Y-m-d H:i:s')
{
    $datetime = Carbon\Carbon::createFromFormat($format, $datetime, $timezone);
    $datetime->tz('UTC');
    return $datetime;
}

function get_local_time()
{
    $ip = file_get_contents("http://ipecho.net/plain");
    $url = 'http://ip-api.com/json/' . $ip;
    $tz = file_get_contents($url);
    $tz = json_decode($tz, true)['timezone'];
    return $tz;
}
