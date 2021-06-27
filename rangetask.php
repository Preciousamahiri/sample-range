<?php
     //range function
     function rangeofnumbers ($start, $end){

         $lenght = $end - $start;

         $range =[];

         for ($i=0; $i <=$lenght; $i++) { 
            $range [$i] = $start++;
         }
             return $range;
     }
   $range = rangeofnumbers (15,40);

     var_dump($range);
     
     echo "<br>";
     echo "<br>";
     echo "<br>";

     
  //sum function
 
 function sumofnumbers ($array){
  $sum = 0;

  for ($i=0; $i < count ($array) ; $i++) { 
       $sum += $array[$i];  
    }
      return $sum;
}
var_dump(sumofnumbers(rangeofnumbers(15, 40)))

?>