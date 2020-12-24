<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
| Host
ec2-54-205-26-79.compute-1.amazonaws.com
Database
d4ak79342nf45j
User
qwkflrdmpiopss
Port
5432
Password
ddca2804bb32fbef35cf5b9b54c3c267e45469145721d966ddc80addf7ca9556
URI
postgres://qwkflrdmpiopss:ddca2804bb32fbef35cf5b9b54c3c267e45469145721d966ddc80addf7ca9556@ec2-54-205-26-79.compute-1.amazonaws.com:5432/d4ak79342nf45j
Heroku CLI
heroku pg:psql postgresql-elliptical-42711 --app tebaktokoh-line
|
channel secret 
871213f0a9287c18e23f0083643f7fca

channel access token 
BBLoJ4GlIaz673g6/I7HdlWtpeTWziW5/DsojTUWOorBHmvdTRtJoGoA+9kaEkmLCmIzZaj5UmX1qqJUdyRAi/01ZCLRP1ZAAJtSaOQZfufYTuR5vZ0oNa2TH3ezDnPGBy7MbA7dHv6kJpC8Mx0MyQdB04t89/1O/w1cDnyilFU=
*/


// KEY NYA YRuYT6YFjlv4jF7lgzGufhMsHWPQClTx

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function(){
    return \Illuminate\Support\Str::random(32);
});

$router->post('/webhook', 'Webhook');