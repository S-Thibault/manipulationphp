<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?php
    // echo file_get_contents('texte.txt');
    // echo '<br><br>';
    //
    //
    //
    // print_r(file('texte.txt'));
    //
    // echo '<br><br>';
    //
    // readfile('texte.txt'); -->


$monfichier = fopen('texte.txt', 'r+');

$ligne = fgets($monfichier);

echo $ligne;

// fputs($monfichier, 'Texte à écrire');

fclose($monfichier);


    ?>
  </body>
</html>
