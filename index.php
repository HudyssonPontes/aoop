<html>
 <head>
  <title>Teste Aoop</title>
 </head>
 <body>
 <?php 
 function email($string){
     echo "<b>O email buscado é:</b> ";
     $string = strtolower($string);
     $a=0;
     $b=1; 
     $arrayChar = str_split($string);
     for($count=1 ; $count<=10 ; $count++){
         $atual = $b + $a;
         echo $arrayChar[$atual];
         if($count==5){
             echo ".";
         }        
         $a = $b;
         $b = $atual;
     } 
    echo "@aoop.com.br";
 }
 $string = "AcoDQeYjrSlByFtyzQhvjoCNVpsaLeQPtGUjQHVzbgabJuAiMHDxwfkNvCwIGmZCTInlSiKvRKxAGzJsgmPeUBAReDzmLzqgJgrXobzfoWiwvRPdFgJzIkSoJscWtVdEbuIRYhXOdHkayBdFIMHSyzIJtmGMhJTiFBaDIzrngCngdSnngUHFWpQpCwElHxunYWsiXKvFOkntcAHiXopTgIKkeovoLrBlPTtMfqTTAgnejUPgKeBsolCtAAjNtKBjf";
 email($string);
 ?>
 </body>
</html>