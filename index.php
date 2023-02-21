<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>PHP Syntax</title>
  </head>
  <body>
    <h1> exercice1 </h1>
      <?php 
       echo 'Hello World'; 
       ?>
    <h2> Exercice2 </h2>
    <?php 
    $salutation = "Hello PHP";
    echo $salutation
    ?>
    <h3> Exercice3 <h3>
      <?php 
      $value1 = "Bonjour." ;
      $value2 = "Bonne journée!";
      echo $value1 . " passe une " . $value2;
      ?>
      <h4> Exercice4 <h4>
        <?php
        
        /**
        Correcteur: Yannick GOUGUIA
        
        
            🌟 Exercise 4 : Reverse The String
            Instructions
            Write a PHP program to reverse the string.
            You can use any string related built-in Function.
            You can use only one variable.
            
            
            Sarah, l'exercice demande renverser un texte string et non un tableau
            
            ex:         
            $str = "Tutorials Class";
            echo strrev($str);
            
        */
             
        $chaine = array("Bonjour. ", "passe une ", "bonne journée");
        print_r(strrev($chaine));
        ?>
  </body>
</html>   
