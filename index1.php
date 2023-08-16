<?php
$t = [
    'test' => [
      'hero' => [
        'which' => [['hero' => 'Spiderman'],['hero' => 'Spiderman3']]
      ]
      ]
  ];

  // echo $t['test']['hero']['which'][1]['hero'];

?>
<?php
  $arr = [[1,2,3],
          [4,5,6],
          [7,8,9]];
    $x = 0;
    $y = 0;

  for($i=0;$i<count($arr);$i++){
    for($j=0;$j<count($arr[$i]);$j++){
      if($i === $j){
        $x += $arr[$i][$j] . "<br>"; 
      }else if($i === 2-$j){
        $y += $arr[$i][$j] . "<br>"; 
      }
    }
  }
  // echo  $x;
          
?>


<?php
// 1. write a code to print - n*n matrix - diagonal should be 0, above diagonal
// elements should be 1 and below should be 2
// 0 1 1 1
// 2 0 1 1
// 2 2 0 1
// 2 2 2 0
$n = 4;
for($i=0;$i<$n;$i++){
  $bag  = " "; 
    for($j=0;$j<$n;$j++){
        if($i === $j){
            $bag = $bag . 0 . " ";
        }else if($i<$j){
           $bag = $bag . 1 . " ";
        }else{
            $bag = $bag . 2 . " ";
        }
    }
    // echo($bag) . '</br>'; 
}      
    ?>

<?php
// 2. Write a program to print half pyramid structure
// 1
// 12
// 123
// 1234
// 12345

 $n = 5;
 $y = "";
 for($i = 1;$i<=$n;$i++){
  
     for($j = $i;$j<=$i;$j++){
      $y = $y . $i;
     }
    //  echo $y . '</br>';
 }


// 1
// 22
// 333
// 4444
// 55555

$n = 5;
 
 for($i = 1;$i<=$n;$i++){
  $z = "";
     for($j = 0;$j<$i;$j++){
      $z = $z . $i;
     }
    //  echo $z . '</br>';
 }
//  *
//  **
//  ***1498000
//  ****
//  *****
$n = 5;
 
 for($i = 1;$i<=$n;$i++){
  $str = "";
     for($j = 0;$j<$i;$j++){
      $str = $str . "*" ;
     }
    //  echo $str . '</br>';
 }
?>


<?php
// 4. Reverse a number
// Input
// Integer - 12345
// Output
// Integer - 54321

$arr = 12345;
$str = (string)$arr;
for($i= strlen($arr) - 1;$i>=0;$i--){
    //  echo $str[$i];
}
?>

<?php
// 5. Print first 10 fibonacci numbers
  $n=10;
  function fib($n){
  if($n === 0){
        return 0; 
  }else if($n === 1){
        return 1; 
  }else{
    return (fib($n-2)+fib($n-1));
  }
} 
 for ($i = 0; $i < $n; $i++){
  // echo fib($i) ." " ;
   }

?>
<?php
// 3. Write a program to print half pyramid structure
//     *
//    ***
//   ****
//  *****
// ******

$n = 5;
$str = "";
for($i=1;$i<=$n;$i++){
  for($j = 0;$j<$n-$i;$j++){
      $str = $str . "_";
  }
     for($k=0;$k<$i;$k++){
      $str = $str . "*";
     }
  
  $str = $str . "</br>";
}
echo $str;

// 1
// 22
// 333
// 4444
// 55555
?>




