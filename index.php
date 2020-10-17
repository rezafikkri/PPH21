<?php

require __DIR__.'/vendor/autoload.php';

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
