<?php
/**1. Регулярные выражения*/
// a.
$str = 'ahb acb aeb aeeb adcb axeb';
$result = [];
$regexp = '/a..b/';
preg_match_all($regexp, $str, $result );
echo "Найденные строки: ";
var_dump($result);

// b.
$strB = '1 2 3';
$regexpB = '/[0-9]+/';
function cube($c) {
    return $c[0] **3;
}
$resultB = preg_replace_callback($regexpB,"cube", $strB);
echo $resultB;

