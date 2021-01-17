<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\SOAP;

/**
 * Description of Snack
 *
 * @author Florian
 */
class Snack {
    //put your code here
     protected  $id;
    /*
     * @param int $id
     
     */
    public function __construct($id) {
        $this->id = $id;
    }
    /*
     * @return string
     */
    public function getN(){
        return $this->id;
    }
}
