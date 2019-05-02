<?php

namespace Askual\Bilbila;


class Generate
{

  private $bilbila;
  function __construct($number,$heal = false)
  {
    $this->bilbila = new Bilbila($number,$heal);
    $this->run();
  }
  private function run()
  {
    $this->formatNumber();
    // $w1 = new \Askual\Bilbila\Calculator\LocalFixed(null);
    $w1 = new Calculator\LocalFixed(null);
    $w2 = new Calculator\LocalMobile($w1);
		$w3 = new Calculator\LocalSpecial($w2);
		$this->bilbila = $w3->calculate($this->bilbila);
  }


  private function isValidInteger($num){
    $lenn = strlen($num);
    for($i =0;$i<$lenn;$i++) {
      $numm = $num[$i];
      if($r = array_search($numm, ['0','1','2','3','4','5','6','7','8','9','+']) === false){
        return false;
      }
      if ($numm == '+' && $i!=0) {
        return false;
      }
    }
    return true;
  }
  private function healNumber(){
    $dd = (string)$this->bilbila->getNumber();
    $ff = str_split($dd);
    $rrr = array_reduce($ff, function ($carry, $item){
      if(array_search($item, ['0','1','2','3','4','5','6','7','8','9']) == true){
          $carry = $carry.$item;
      }
      if ($item == '+' && !$carry) {
        $carry = $carry.$item;
      }
        return $carry;
    });
    $this->bilbila->setNumber($rrr);
  }
  private function formatNumber(){
    $this->bilbila->setNumber(str_replace(" ", "", $this->bilbila->getNumber()));
    if ($this->bilbila->getHeal()) {
      $this->healNumber();
    }
    if(!$this->isValidInteger($this->bilbila->getNumber())) {
        throw new Exception\NonNumericException();
    }

    foreach (Constants::INT_PHONE_CODE as $key=>$code) {
      if (strlen($this->bilbila->getNumber()) > 9) {
        $t1 = strpos($key,$this->bilbila->getNumber());
        $t2 = strpos($key,'+'.$this->bilbila->getNumber());
        $code = '';
        if ($t1 === 0 ) {
          $this->bilbila->setNumber('+'.$this->bilbila->getNumber());
          $this->bilbila->setCountry($code[0]);
          return;
        }
        if($t2 === 0 ) {
          $this->bilbila->setCountry($code[0]);
          return;
        }
      }
    }
  }
  public function __get($sth){
    if ($this->bilbila == null) {
      throw new Exception\UnknownNumberException();
    }
    switch ($sth) {
      case 'number':
        return $this->bilbila->getNumber();
        break;
      case 'country':
        return $this->bilbila->getCountry();
        break;
      case 'localArea':
        return $this->bilbila->getLocalRegion();
        break;

      default:
        throw new Exception\UnknownPropertyException($sth);
        break;
    }
  }

}
