<?php 

$rand1= mt_rand(0, 8);



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

$result = array
  (
  array(0, 0, 0, 0, 0, 0, 0, 0, 0),
  array(0, 0, 0, 0, 0, 0, 0, 0, 0),
  array(0, 0, 0, 0, 0, 0, 0, 0, 0),
  array(0, 0, 0, 0, 0, 0, 0, 0, 0),
  array(0, 0, 0, 0, 0, 0, 0, 0, 0),
  array(0, 0, 0, 0, 0, 0, 0, 0, 0),
  array(0, 0, 0, 0, 0, 0, 0, 0, 0),
  array(0, 0, 0, 0, 0, 0, 0, 0, 0),
  array(0, 0, 0, 0, 0, 0, 0, 0, 0)
  );



//function RowShuffle() {
//Shuffle Row-Wise


    $num1= mt_rand(1, 3);
    $num2= mt_rand(4, 6);
    $num3= mt_rand(7, 9);  

    
    if($num1 == 1){ 
        
      for ($i=0; $i<=8; $i++){
        $temp ;
        $temp = $array[0][$i];
        $array[0][$i] = $array[2][$i];
        $array[2][$i] = $temp;
     }     
   } 
    
    if($num1 == 2){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[0][$i];
        $array[0][$i] = $array[1][$i];
        $array[1][$i] = $temp;
     }     
   } 
    
    if($num1 == 3){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[1][$i];
        $array[1][$i] = $array[2][$i];
        $array[2][$i] = $temp;
     }     
   } 
    

    
     if($num2 == 4){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[3][$i];
        $array[3][$i] = $array[5][$i];
        $array[5][$i] = $temp;
     }     
   } 
    
    if($num2 == 5){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[3][$i];
        $array[3][$i] = $array[4][$i];
        $array[4][$i] = $temp;
     }     
   } 
    
    if($num2 == 6){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[4][$i];
        $array[4][$i] = $array[5][$i];
        $array[5][$i] = $temp;
     }     
   } 



     if($num3 == 7){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[6][$i];
        $array[6][$i] = $array[8][$i];
        $array[8][$i] = $temp;
     }     
   } 
    
    if($num3 == 8){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[7][$i];
        $array[7][$i] = $array[8][$i];
        $array[8][$i] = $temp;
     }     
   } 
    
    if($num3 == 9){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[6][$i];
        $array[6][$i] = $array[7][$i];
        $array[7][$i] = $temp;
     }     
   } 
    


  
//Shuffle Column-Wise


    $col1= mt_rand(1, 3);
    $col2= mt_rand(4, 5);
    $col3= mt_rand(7, 9);  

    
    if($col1 == 1){ 
        
      for ($i=0; $i<=8; $i++){
        $temp ;
        $temp = $array[$i][0];
        $array[$i][0] = $array[$i][2];
        $array[$i][2] = $temp;
     }     
   } 
    
    if($col1 == 2){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[$i][0];
        $array[$i][0] = $array[$i][1];
        $array[$i][1] = $temp;
     }     
   } 
    
    if($col1 == 3){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[$i][1];
        $array[$i][1] = $array[$i][2];
        $array[$i][2] = $temp;
     }     
   } 
    

    
     if($col2 == 4){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[$i][3];
        $array[$i][3] = $array[$i][5];
        $array[$i][5] = $temp;
     }     
   } 
    
    if($col2 == 5){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[$i][3];
        $array[$i][3] = $array[$i][4];
        $array[$i][4] = $temp;
     }     
   } 
    
    if($col2 == 6){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[$i][4];
        $array[$i][4] = $array[5];
        $array[$i][5] = $temp;
     }     
   } 



     if($col3 == 7){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[$i][6];
        $array[$i][6] = $array[$i][8];
        $array[$i][8] = $temp;
     }     
   } 
    
    if($col3 == 8){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[$i][7];
        $array[$i][7] = $array[$i][8];
        $array[$i][8] = $temp;
     }     
   } 
    
    if($col3 == 9){ 
        
      for ($i=0; $i<=8; $i++){
        $temp = 0;
        $temp = $array[$i][6];
        $array[$i][6] = $array[$i][7];
        $array[$i][7] = $temp;
     }     
   } 
    



//function shuffleRowGrid(){
    
    
  //  global $array;
    
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

$solution= "";


for ($i = 0; $i<=8; $i++){
       
       for ($j = 0; $j<=8; $j++){
           $solution .= strval($array[$i][$j]);
           $solution .= " ";
           
       }
       $solution .= "\n"; 
   }


function show(){
    
   global $solution;
       echo $solution ;
}



?>


<html>
    
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sudoku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
</head>

    
<body >
    
    <div   class="jumbotron bg-warning">
    <h1 class="display-3">Sudoku</h1>
    
        

    <style>
table { border-collapse: collapse; font-family: Calibri, sans-serif; }
colgroup, tbody { border: solid medium; }
td { border: solid thin; height: 1.4em; width: 1.4em; text-align: center; padding: 0; }
</style>
    
    
    
   
  
    
    
<table class="a" id="a" >
  <caption>Sudoku of the day</caption>
  <colgroup><col><col><col></colgroup>
  <colgroup><col><col><col></colgroup>
  <colgroup><col><col><col></colgroup>
  <tbody>
   <tr> 
       <td><input type="text" id="00" name="00" maxlength="01" onkeyup="sendid(this.id,this.name)"  size="1" value=""></td>
       <td><input type="text" id="01" name="01" maxlength="01" onkeyup="sendid(this.id,this.name)" size="1" value=""> </td>
       <td><input type="text" id="02" name="02" maxlength="01" onkeyup="sendid(this.id,this.name)" size="1" value="">  </td>
       <td><input type="text" id="03" name="03" maxlength="01" onkeyup="sendid(this.id,this.name)" size="1" value=""> </td>
       <td><input type="text" id="04" name="04" maxlength="01" onkeyup="sendid(this.id,this.name)" size="1" value=""> </td>
       <td><input type="text" id="05" name="05" maxlength="01" onkeyup="sendid(this.id,this.name)" size="1" value=""> </td>
       <td><input type="text" id="06" name="06" maxlength="01" onkeyup="sendid(this.id,this.name)" size="1" value=""></td>
       <td><input type="text" id="07" name="07" maxlength="01" onkeyup="sendid(this.id,this.name)" size="1" value=""></td>
       <td><input type="text" id="08" name="08" maxlength="01" onkeyup="sendid(this.id,this.name)" size="1" value=""></td>
   </tr>
      
      <tr> 
       <td><input type="text" id="10" name="10" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">  </td>
       <td><input type="text" id="11" name="11" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> </td>
       <td><input type="text" id="12" name="12" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> </td>
       <td><input type="text" id="13" name="13" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> </td>
       <td><input type="text" id="14" name="14" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""></td>
       <td><input type="text" id="15" name="15" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""></td>
       <td><input type="text" id="16" name="16" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""></td>
       <td><input type="text" id="17" name="17" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""></td>
       <td><input type="text" id="18" name="18" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> </td>
   </tr>
      
      <tr> 
       
      
       <td><input type="text" name="20" id="20"  onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> </td>
       <td><input type="text" name="21" id="21"  onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> </td>
       <td><input type="text" name="22" id="22"  onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""></td>
       <td><input type="text" name="23" id="23"  onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""></td>
       <td><input type="text" name="24" id="24" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""></td>
       <td><input type="text" name="25" id="25"  onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""></td>
       <td><input type="text" name="26" id="26"  onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> </td>
       <td><input type="text" name="27" id="27"  onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
            <td><input type="text" name="28" id="28" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
   </tr>
      
      <tr> 
       
      
       <td><input type="text" name="30" id="30" onkeyup="sendid(this.id,this.name)" maxlength="1"  size="1" value="">
       <td><input type="text" name="31" id="31" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="32" id="32" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="33" id="33" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="34" id="34" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="35" id="35" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">  
       <td><input type="text" name="36" id="36" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="37" id="37" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="38" id="38" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
      </tr>
      
      <tr> 
       
       
       <td><input type="text"  name="40" id="40" onkeyup="sendid(this.id, this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="41" id="41" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="42" id="42" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="43" id="43" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">  
       <td><input type="text" name="44" id="44" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="45" id="45" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
        <td><input type="text" name="46" id="46" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="47" id="47" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="48" id="48" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">   
   </tr>
      
      <tr> 
       
       
        <td><input type="text" name="50" id="50" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="51" id="51" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">  
       <td><input type="text" name="52" id="52" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="53" id="53" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="54" id="54" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="55" id="55" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="56" id="56" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="57" id="57" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="58" id="58" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
   </tr>
      
      <tr> 
       
      
       <td><input type="text" name="60" id="60" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="61" id="61" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="62" id="62" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="63" id="63" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="64" id="64" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="65" id="65" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="66" id="66" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
      <td><input type="text" name="67" id="67" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="68" id="68" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">  
      </tr>
      
      <tr> 
       
      
       <td><input type="text" name="70" id="70" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="71" id="71" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="72" id="72" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="73" id="73" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="74" id="74" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="75" id="75" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="76" id="76" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">  
       <td><input type="text" name="77" id="77" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="78" id="78" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
      </tr>
      
      <tr> 
       
       <td><input type="text" name="80" id="80" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="81" id="81" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="82" id="82" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
       <td><input type="text" name="83" id="83" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="84" id="84" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">  
       <td><input type="text" name="85" id="85" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="86" id="86" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="87" id="87" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value=""> 
       <td><input type="text" name="88" id="88" onkeyup="sendid(this.id,this.name)" maxlength="1" size="1" value="">
      
   </tr>
      </tbody>
</table>
       

      <script type="text/javascript">
          
          
           //   var rnd1 = <//?php echo json_encode($rand1); ?>;
           var array = <?php echo json_encode($array); ?>;
           var result = <?php echo json_encode($result); ?>;
           
           var solution = <?php echo json_encode($solution); ?>;
          // var checkvalues = [[],[]];
          
          
          
        function solution1(){
            
            alert(solution);
            
            
        }

          
      
          
        
          function sendid(id, name){
        
             // alert(id);
              
            var  value = parseInt(document.getElementById(id).value, 10);
              
              // alert(name+" is index & value is "+value);
              
              
              var ind1 = parseInt(name.charAt(0), 10);
              var ind2 = parseInt(name.charAt(1), 10);
              
              f[ind1][ind2] = value;
              result[ind1][ind2] = value;
              
              //alert(value+ind1+ind2);
                     
     }    
              
      
          
          var f = [];
          f[0] = [];
          f[1] = [];
          f[2] = [];
          f[3] = [];
          f[4] = [];
          f[5] = [];
          f[6] = [];
          f[7] = [];
          f[8] = [];
          
          
          
          
          
              function change(){
              
          for(var x=0; x<=8; x++){
              
              
              var rnd1 = 0;
              var times =0;
              
              
              
              for(var y=0; y<=8; y++){
                         
              rnd1 = Math.floor(Math.random()*9);
                  
                 var str1 = x.toString();
                 var str2 = rnd1.toString();
                 var res = str1.concat(str2);
                  
                  if(times<=3){
                     
                      f[x][rnd1]=array[x][rnd1];
                      document.getElementById(res).value = f[x][rnd1];
                      result[x][rnd1] = array[x][rnd1];
                   // checkvalues[x][rnd1] = array[x][rnd1];
                      
                      document.getElementById(res).disabled = true;
                      times++;
                      
                  }
                  
                  else{
                      
              }     
          }
      }         
  }
      change();
          
          var jsarray = new Array();
		jsarray[0] = "Saab";
		jsarray[1] = "Volvo";
		jsarray[2] = "BMW";	
        
      
              $(document).ready(function(){
			$("#btn").click( function() {
				$.post( $("#myForm").attr("action"),
					 $('#str').val(JSON.stringify(jsarray)),  
			         //$("#myForm :input").serializeArray(), 
			         function(info){ $("#result").html(info); 
				});
			});
			 
			$("#myForm").submit( function() {
				return false;	
			});
			
		});
              
              
              
         function win(){
             
             if(array[0][0] == result[0][0] & array[0][1] == result[0][1] & array[0][2] == result[0][2] & array[0][3] == result[0][3] & array[0][4] == result[0][4] & array[0][5] == result[0][5] & array[0][6] == result[0][6] & array[0][7] == result[0][7] & array[0][8] == result[0][8] & array[1][0] == result[1][0] & array[1][1] == result[1][1] & array[1][2] == result[1][2] & array[1][3] == result[1][3] & array[1][4] == result[1][4] & array[1][5] == result[1][5] & array[1][6] == result[1][6] & array[1][7] == result[1][7] & array[1][8] == result[1][8] 
                & array[2][0] == result[2][0] & array[2][1] == result[2][1] & array[2][2] == result[2][2] & array[2][3] == result[2][3] & array[2][4] == result[2][4] & array[2][5] == result[2][5] & array[2][6] == result[2][6] & array[2][7] == result[2][7] & array[2][8] == result[2][8]
                & array[3][0] == result[3][0] & array[3][1] == result[3][1] & array[3][2] == result[3][2] & array[3][3] == result[3][3] & array[3][4] == result[3][4] & array[3][5] == result[3][5] & array[3][6] == result[3][6] & array[3][7] == result[3][7] & array[3][8] == result[3][8]
                & array[4][0] == result[4][0] & array[4][1] == result[4][1] & array[4][2] == result[4][2] & array[4][3] == result[4][3] & array[4][4] == result[4][4] & array[4][5] == result[4][5] & array[4][6] == result[4][6] & array[4][7] == result[4][7] & array[4][8] == result[4][8]
                & array[5][0] == result[5][0] & array[5][1] == result[5][1] & array[5][2] == result[5][2] & array[5][3] == result[5][3] & array[5][4] == result[5][4] & array[5][5] == result[5][5] & array[5][6] == result[5][6] & array[5][7] == result[5][7] & array[5][8] == result[5][8]
                & array[6][0] == result[6][0] & array[6][1] == result[6][1] & array[6][2] == result[6][2] & array[6][3] == result[6][3] & array[6][4] == result[6][4] & array[6][5] == result[6][5] & array[6][6] == result[6][6] & array[6][7] == result[6][7] & array[6][8] == result[6][8]
                & array[7][0] == result[7][0] & array[7][1] == result[7][1] & array[7][2] == result[7][2] & array[7][3] == result[7][3] & array[7][4] == result[7][4] & array[7][5] == result[7][5] & array[7][6] == result[7][6] & array[7][7] == result[7][7] & array[7][8] == result[7][8]
                & array[8][0] == result[8][0] & array[8][1] == result[8][1] & array[8][2] == result[8][2] & array[8][3] == result[8][3] & array[8][4] == result[8][4] & array[8][5] == result[8][5] & array[8][6] == result[8][6] & array[8][7] == result[8][7] & array[8][8] == result[8][8]
               
               
               
               )
                 window.location.href = 'win.php';
             else
             alert("Some values are Missing \n or \n Values are not placed right ");
             
         }
          
          
          
          
      
      </script>
         <p class="lead">
        <a class="btn btn-primary btn-lg" onclick="win()" class="btn btn-default">Submit Solution</a>
             <a class="btn btn-primary btn-lg" onclick="solution1()" class="btn btn-default">Show Solution</a>
    
        </p>
            
            <p class="lead">
        <a class="btn btn-primary btn-lg" href="https://www.miniclip.com/games/en/" class="btn btn-default">MiniClip</a>
           
    </p>
        
    </div>
    
   
    
    
    
    
       </body>
       </html>