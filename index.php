<html>
 <head>
  <title>Teste Aoop</title>
 </head>
 <body>
 <?php 
    echo "<b>O email buscado é:</b> ";
    $a=0;
    $b=1; 
    $string = strtolower("AcoDQeYjrSlByFtyzQhvjoCNVpsaLeQPtGUjQHVzbgabJuAiMHDxwfkNvCwIGmZCTInlSiKvRKxAGzJsgmPeUBAReDzmLzqgJgrXobzfoWiwvRPdFgJzIkSoJscWtVdEbuIRYhXOdHkayBdFIMHSyzIJtmGMhJTiFBaDIzrngCngdSnngUHFWpQpCwElHxunYWsiXKvFOkntcAHiXopTgIKkeovoLrBlPTtMfqTTAgnejUPgKeBsolCtAAjNtKBjf");
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
 ?>
 </body>
</html>