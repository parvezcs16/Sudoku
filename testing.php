<?php 


 $array = array
  (
  array(1, 2, 3, 4, 5, 6, 7, 8, 9),
  array(4, 5, 6, 7, 8, 9, 1, 2, 3),
  array(7, 8, 9, 1, 2, 3, 4, 5, 6),
  array(2, 3, 1, 5, 6, 4, 8, 9, 7),
  array(5, 6, 4, 8, 9, 7, 2, 3, 1),
  array(8, 9, 7, 2, 3, 1, 5, 6, 4),
  array(3, 1, 2, 6, 4, 5, 9, 7, 8),
  array(6, 4, 5, 9, 7, 8, 3, 1, 2),
  array(9, 7, 8, 3, 1, 2, 6, 4, 5)
  );


/*
function RowShuffle() {
     global $grid;
    $num1= 1;
    
     if($num1 == 1){ 
        
      for ($i=0; $i<=8; $i++){
        $temp= 0 ;
        $temp =  $grid[0][$i];
        $grid[0][$i] = $grid[1][$i];
        $grid[1][$i] = $temp;
     }     
   } 
}


RowShuffle();

*/

    
    $gridrow= mt_rand(1, 3);
    
    
    for ($i=0; $i<=2; $i++){
        for ($j=0; $j<=8; $j++){
    
            $temp1 = 0; $temp2 = 0;
    
     if($gridrow == 1){
         
        $temp1 = $array[$i][$j];
        $temp2 = $array[$i+3][$j];
        $array[$i+3][$j] = $array[$i+6][$j];
        $array[$i+6][$j] = $temp1;
        $array[$i][$j] = $temp2;      
    }
    
    if($gridrow == 2){
   // $temp1 = $array[$i][$j];
    $temp2 = $array[$i+3][$j];
    $array[$i+3][$j] = $array[$i+6][$j];
    $array[$i+6][$j] = $temp2;
    //$array[$i][$j] = $temp2;      
    }
    
     if($gridrow == 3){
   // $temp1 = $array[$i][$j];
    $temp2 = $array[$i+3][$j];
    $array[$i+3][$j] = $array[$i][$j];
    $array[$i][$j] = $temp2;
    //$array[$i][$j] = $temp2;      
    }  
  }
}


$i = 3; $j =1; 

echo $gridrow."<br>";

for ($i = 0; $i<9; $i++){
       
       for ($j = 0; $j<9; $j++){
           echo $array[$i][$j]. "   ";
       }
       echo "<br>"; 
   }







?>









<html>

<script>
    
   var rnd1 =  Math.floor(Math.random()*9);;
    document.write("random num:"+rnd1);
    
    </script>


</html>



