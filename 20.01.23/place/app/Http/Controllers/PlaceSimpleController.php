<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\json_decode;

class PlaceSimpleController extends Controller
{
    public function index(Request $request) {
        return view('place-simple');
    }



    public function findPlace(Request $request){


        $apiKey = 'F3-VWgcFZnSYqqTcd6tKRRetYn1uch8K9e3cr_aJif0';
        $client = new Client();
        $location = $request->input('location');
        $placeType = $request->input('placeType');
        $validateInputs = !empty($location) && !empty($placeType);
        $result = view('place-simple');
        if ($validateInputs) {

            $locationEndpoint = 'https://geocode.search.hereapi.com/v1/geocode?'
                . 'q=' . $location
                . '&apiKey=' . $apiKey;

            $locationResponse = $client->request('GET', $locationEndpoint);
            $locationResponseBody = $locationResponse->getBody();
            $locationResponseJSON = json_decode($locationResponseBody);

            $latitude = $locationResponseJSON->items[0]->position->lat;
            $longitude = $locationResponseJSON->items[0]->position->lng;

            $placesEndpoint = 'https://discover.search.hereapi.com/v1/discover?'
                . 'at=' . $latitude . ',' . $longitude . '&q=' . $placeType
                . '&apiKey=' . $apiKey;

            $placesResponse = $client->request('GET', $placesEndpoint);
            $placesResponseBody = $placesResponse->getBody();
            $placesResponseJSON = json_decode($placesResponseBody);

            $places = $placesResponseJSON->items;

            $result = view('place-simple')
                ->with('places', $places)
                ->with('location', $location)
                ->with('placeType', $placeType);
        }
        return $result;
    
    }


       

}
