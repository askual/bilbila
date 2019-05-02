<?php

namespace Askual\Bilbila\Calculator;
// include_once __DIR__.'/Calculator.php';

/**
 *
 */
class LocalSpecial extends Calculator
{
  public function realCalculation(){
    $n = $this->myBilbila->getNumber();
    if (strlen($n)==4 || strlen($n)==3) {
      return true;
    }
    return false;
  }
}
