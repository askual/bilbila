<?php

namespace Askual\Bilbila\Calculator;

/**
 *
 */
class LocalFixed extends Calculator
{
  /**
  * +251115587654, 0462270161
  */
  public function realCalculation(){
    $num = $this->myBilbila->getNumber();
    $n = strlen($num);
    $cod = \Askual\Bilbila\Constants::ETH_CODE;
    $code = '+'.$cod;
    $ethio = \Askual\Bilbila\Constants::INT_PHONE_CODE[$cod][0];
    if ($n != 10 && $n != 13) {
      return false;
    }
    if ($n == 13) {
      $t2 = strpos($num,$code);
      if ($t2 === 0 ) {
        $num = '0'.substr($num,4);
      }else{
        return false;
      }
    }
    $c = substr($num,0,3);
    if ($h = array_search($c, array_keys(\Askual\Bilbila\Constants::LOCAL_PHONE_CODE)) === false) {
      return false;
    }
    $this->myBilbila->setLocalRegion(\Askual\Bilbila\Constants::LOCAL_PHONE_CODE[$c][0]);
    $this->myBilbila->setCountry($ethio);
    $this->myBilbila->setNumber($code.substr($num,1));
    return true;
  }
}
