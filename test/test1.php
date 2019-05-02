<?php

include_once __DIR__.'/../src/autoload.php';



// $dd = "+23ef45+";


// $d = array_filter($ff,  function ($var,$var2){
// 	echo $var." ".$var2."\n";
// 	if(array_search((string)$var, ['0','1','2','3','4','5','6','7','8','9']) == true){
// 	    return true;
// 	 }
// 	if(array_search((string)$var, ['+']) == true){
// 	    return true;
// 	 }
// 	 return false;
// });
// print implode("", $d);
// $ff = str_split($dd);
// $rrr = array_reduce($ff, function ($carry, $item){
// 	if(array_search($item, ['0','1','2','3','4','5','6','7','8','9']) == true){
// 	    $carry = $carry.$item;
// 	}
// 	if ($item == '+' && !$carry) {
// 		$carry = $carry.$item;
// 	}
//     return $carry;
// });

// echo $rrr."\n";
// exit();


$numbers = [
  '0582278 909','+2511178908795','99u7', '8123','0925287357', '+2519 2528 +357','456o8', '0462270161'
];
foreach ($numbers as $key => $number) {
  try {
	  $b = new Askual\Bilbila\Generate($number,true);
	  // if (random_int(1, 6) == 4) {
		print($number.' : '.$b->number.' : '.$b->localArea.PHP_EOL);
	  // }else{
	  // 	print($number.' : '.$b->numbers.' : '.$b->localArea.PHP_EOL);
	  // }
  } catch (Exception $e) {
  	print($number.' ERROR: '.$e->getMessage().PHP_EOL);
  }
}
