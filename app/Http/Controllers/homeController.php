<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function goMovie()
    {
        $sw = new SoapWrapper();
        $sw->add("QuoteProvider",  function ($service) {
        $service->wsdl("http://localhost:55112/QuoteProvider.asmx?WSDL") 
                   ->trace(true)
                   ->classmap([
                   QuoteOfTheDay::class
                   ]);
        });
        // vanaf hier gebruiken we de SOAP wrapper
        $response = $sw->call("QuoteProvider.GetSnack", [new QuoteOfTheDay("Action")]);
        $quote = $response->GetSnackResult;
        return view('movie');
    }
}
