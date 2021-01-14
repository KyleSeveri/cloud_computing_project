<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SOAP\MovieQuote;
use App\SOAP\MovieQuoteOrigin;
use Artisaninweb\SoapWrapper\SoapWrapper;   

class homeController extends Controller
{
    public function goMovie()
    {
        $sw = new SoapWrapper();
        $sw->add("QuoteProvider",  function ($service) {
        $service->wsdl("https://quoteprovider.azurewebsites.net/QuoteProvider.asmx?WSDL") 
                   ->trace(true)
                   ->classmap([
                   MovieQuote::class
                   ]);
        });
        // vanaf hier gebruiken we de SOAP wrapper
        $response = $sw->call("QuoteProvider.GetRandomMovieQuote");
        $quote = $response->GetRandomMovieQuoteResult;
        return view('movie')->with("quote", $quote);
                        
    }
}
