- manipuler des fichiers en PHP : Ouvrir, lire et fermer un fichier en PHP, créer et écrire dans un fichier en PHP et autres opérations sur les fichiers en PHP

on peut lire un fichier entièrement c’est-à-dire afficher tout son contenu d’un coup en utilisant l’une des fonctions suivantes :

La fonction file_get_contents() ;
La fonction file() ;
La fonction readfile () ;

on met entre les () le nom du fichier que l'ont veut lire.

Exemple

  <?php

    echo file_get_contents('text.txt');
    echo '<br><br>';

    echo '<pre>';
    print_r(file('text.txt'));
    echo '</pre>';
    echo '<br><br>';

    readfile('text.txt');

  ?>

Pour lire un fichier partie par partie, nous allons avant tout devoir l’ouvrir. Pour ouvrir un fichier en PHP, nous allons utiliser la fonction fopen(), abréviation de « file open » ou « ouverture de fichier ».

fopen('le fichier a ouvrir', + 'mode d'ouverture')

'r'	Ouvre un fichier en lecture seule. Il est impossible de modifier le fichier.

'r+' Ouvre un fichier en lecture et en écriture.

'a'	Ouvre un fichier en écriture seule en conservant les données existantes. Si le fichier n’existe pas, le PHP tente de le créer.

'a+' Ouvre un fichier en lecture et en écriture en conservant les données existantes. Si le fichier n’existe pas, le PHP tente de le créer.

'w'	Ouvre un fichier en écriture seule. Si le fichier existe, les informations existantes seront supprimées. S’il n’existe pas, crée un fichier.

'w+'	Ouvre un fichier en lecture et en écriture. Si le fichier existe, les informations existantes seront supprimées. S’il n’existe pas, crée un fichier.

'x'	Crée un nouveau fichier accessible en écriture seulement. Retourne false et une erreur si le fichier existe déjà.

'x+' Crée un nouveau fichier accessible en lecture et en écriture. Retourne false et une erreur si le fichier existe déjà.

'c'	Ouvre un fichier pour écriture seulement. Si le fichier n’existe pas, il sera crée. Si il existe, les informations seront conservées.

'c+'	Ouvre un fichier pour lecture et écriture. Si le fichier n’existe pas, il sera crée. Si il existe, les informations seront conservées.

La fonction fread() abréviation de « file read » ou « lecture de fichier » va prendre en arguments le fichier renvoyé par fopen() ainsi qu’un nombre qui correspond aux nombres d’octets du fichier qui doivent être lus.

La fonction fgets() va nous permettre de lire un fichier ligne par ligne. On va passer le résultat renvoyé par fopen() en argument de fgets() et à chaque nouvel appel de la fonction, une nouvelle ligne du fichier va pouvoir être lue.

Exemple

<?php
  $ligne = fgets($fichier);

  echo $ligne;

?>

fseek($fichier, 0); permet de se positionner dans le fichier a modifier
fputs($fichier, $)modifie le fichier

fclose($fichier);
