<?php

require __DIR__.'/src/CalculatorInterface.php';
require __DIR__.'/src/AbstractCalculator.php';
require __DIR__.'/src/FirstRuleCalculator.php';
require __DIR__.'/src/SecondRuleCalculator.php';
require __DIR__.'/src/ThirdRuleCalculator.php';
require __DIR__.'/src/FourthRuleCalculator.php';
require __DIR__.'/src/PPH21Calculator.php';

use PPH21\FirstRuleCalculator;
use PPH21\SecondRuleCalculator;
use PPH21\ThirdRuleCalculator;
use PPH21\FourthRuleCalculator;
use PPH21\PPH21Calculator;

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);

$calculator = new PPH21Calculator($first, $second, $third, $fourth);

//170.000.000
echo $calculator->calculate(60000000);