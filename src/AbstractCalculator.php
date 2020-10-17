<?php

namespace PPH21;

abstract class AbstractCalculator implements CalculatorInterface { 
    private $chain;

    public function __construct(?CalculatorInterface $chain = null) {
        $this->chain = $chain;    
    }

    public function calculate(float $pkp, float $hasil=0): float {
        if ($previous = $this->chain) {
            $pkp = $pkp-$previous->maxPkp();
            $hasil = ($pkp*$this->taxPercentage())+$hasil;
            return $this->chain->calculate($previous->maxPkp(), $hasil);
        }

        return ($this->taxPercentage() * $pkp) + $hasil;
    }
}

/*

jalan firstCalculator
    
    calculate(pkp = 60.000.000)
    previousvalue = 2.500.000

    60.000.000-50.000.000 = 10.000.000 x 15% = 1.500.000 + 2.500.000


    jalan secondCalculator

        calculate(pkp = 50.000.000)
        hasil = 2.500.000

*/