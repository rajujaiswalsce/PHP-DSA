<?php
  $a = "wakefit"; // Global Scope
  function myFunction(){
      GLOBAL $a;  
      $b = 20; // local scope
      echo "go to my website <br>". $a ."<br>".$b;
  }
  
//   myFunction();

//  staticFunction();

//   function staticFunction(){
//       static $x = 0;
//       echo $x."<br>";
//       $x++;
//   }
//   staticFunction();
//   staticFunction();
//   myFunction();

  $arr = [1,2,3,4,5,6];
  array_pop($arr);
  $y = 20;
  array_push($arr,$y);
  print_r($arr); 


?>
