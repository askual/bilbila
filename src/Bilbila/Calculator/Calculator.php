<?php

namespace Askual\Bilbila\Calculator;
/**
 *
 */
abstract class Calculator
{
  protected $nextCalculator;
  protected $myBilbila;

  public function __construct(Calculator $dealer=null){
    $this->nextCalculator = $dealer;
  }
  public function calculate(\Askual\Bilbila\Bilbila $bilbila){
    $this->myBilbila = $bilbila;
    if ($this->realCalculation()) {
      return $this->myBilbila;
    }
    if ($this->nextCalculator)
      return $this->nextCalculator->calculate($bilbila);
  }
  abstract public function realCalculation();
}
