<?php

namespace App\Http\Controllers;


use Facade\FlareClient\View;
use Illuminate\Http\Request;
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
class TwitterController extends Controller{

    
    
    public function index()
    {
        define('consumer_key','7GZQMJ2DmWfeBwrF66ffaD86a');
        define('consumer_secret','
        TupskHmfsuIZgFjlIofF9pROdpR68yb66ds7R4qh3tBeJeqy30');
        $access_token='957878558503948288-DzmB2RlRFdLKWrezyFdxU92zgfN4gQ7';
        $access_token_secret='ngN2T91h1ENpVomsaqq9vqve3DbAUdsaBVvlijJNY67d8';

        $connection=new TwitterOAuth(consumer_key,consumer_secret,$access_token,$access_token_secret);
        $followers=$connection->get('followers/list');


        return View('index')->with('followers',$followers);
    }
}
