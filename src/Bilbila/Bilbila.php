<?php

namespace Askual\Bilbila;

/**
 *
 */
class Bilbila
{

  protected $number;
  protected $country;
  protected $localRegion;
  protected $heal;
  function __construct( $number,$heal){
    $this->number = $number;
    $this->heal = $heal;
  }

  public function getNumber(){
    return $this->number;
  }
  public function setNumber($n){
    $this->number = $n;
  }
  public function getCountry(){
    return $this->country;
  }
  public function setCountry($c){
    $this->country = $c;
  }
  public function getHeal(){
    return $this->heal;
  }
  public function getLocalRegion(){
    return $this->localRegion;
  }
  public function setLocalRegion($localRegion){
    $this->localRegion = $localRegion;
  }




}
