<?php

namespace Askual\Bilbila\Calculator;

/**
 *
 */
class LocalMobile extends Calculator
{
  /**
  * +251925287357, 0925287357
  */
  public function realCalculation(){
    $num = $this->myBilbila->getNumber();
    $n = strlen($num);
    $cod = \Askual\Bilbila\Constants::ETH_CODE;
    $code = '+'.$cod.'9';
    $ethio = \Askual\Bilbila\Constants::INT_PHONE_CODE[$cod][0];
    if ($n == 10) {
      $t1 = strpos($num,'09');
      if ($t1 === 0 ) {
        $this->myBilbila->setCountry($ethio);
        $this->myBilbila->setNumber($code.substr($num,2));
        return true;
      }
    }
    if ($n == 13) {
      $t2 = strpos($num,$code);
      if ($t2 === 0 ) {
        $this->myBilbila->setCountry($ethio);
        $this->myBilbila->setNumber($num);
        return true;
      }
    }
    return false;
  }
}
