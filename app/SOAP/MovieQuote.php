<?php
namespace App\SOAP;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author Florian
 */
class MovieQuote {
    //put your code here
    protected $n;
    
    public function __construct($n) {
        $this->n = $n;
    }
    
    public function getN(){
        return $this->n;
    }
}
    
    

