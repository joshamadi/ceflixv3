<?php

namespace App\Http\Controllers\bridge;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    //


    public function showNewVideos()
    {
        $client =  new Client();

        try {


            $response = $client->request('POST', env('API_HOST') . 'http://apix3x9.ceflix.org/videos/loadrecentvideos', [

            ]);


            $res = $response->getBody()->getContents();
            header('Content-Type: application/json');
            die($res);


            //return Redirect::route("loadArtists")->with("message", $res->message)->with("type", 'success');

        }catch(ClientException $exception){
            $response = $exception->getResponse()->getBody(true)->getContents();
            header('Content-Type: application/json');
            die($response);
        }
    }


    public function showFeaturedVideos()
    {
        $client =  new Client();

        try {


            $response = $client->request('POST', env('API_HOST') . 'http://immtv.loveworldapis.com/segment/return_featured', [

            ]);


            $res = $response->getBody()->getContents();
            header('Content-Type: application/json');
            die($res);


            //return Redirect::route("loadArtists")->with("message", $res->message)->with("type", 'success');

        }catch(ClientException $exception){
            $response = $exception->getResponse()->getBody(true)->getContents();
            header('Content-Type: application/json');
            die($response);
        }
    }




    public function showRecommVideos()
    {
        $client =  new Client();

        try {
            $response = $client->request('POST', env('API_HOST') . 'http://apix3x9.ceflix.org//videos/recommendedvideos', [

            ]);

            $res = $response->getBody()->getContents();
            header('Content-Type: application/json');
            die($res);


            //return Redirect::route("loadArtists")->with("message", $res->message)->with("type", 'success');

        }catch(ClientException $exception){
            $response = $exception->getResponse()->getBody(true)->getContents();
            header('Content-Type: application/json');
            die($response);
        }
    }


}

