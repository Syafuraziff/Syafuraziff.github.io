<?php
    session_start(); 
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!==true)
    {
        header("location: login.php");
        exit; 
    }
    $usrlevel=$_SESSION["userlevel"];
?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset = "UTF-8">
        <title> Komentar</title> 
        <style>
            body {
                height: 900px;
                background: linear-gradient(#000000, #009190 0%, #bc85a3 51%, #000000  75%);
            }
            ul#menu li {
            display:inline;
            }
        </style>
    </head>
    <body>
    <?php
        switch($usrlevel){
            case 1: 
                include('menuAdmin.php');
                break; 
            case 2: 
                include('menuUser1.php');
                break; 
        }    
    ?>      
    <p><img height = 200 width=100% src = "image/banner.jpg"></p> 
    <form action="#">
      <fieldset>
          <legend><h2>Komentar</h2></legend>
        <label for="fname">Nama:</label>
        <input type="text" id="fname" name="fname" value="Nama Anda"><br><br>
        <label>Jantina:</label>
        <input type="radio" id="lelaki" name="Jantina" value="lelaki">
        <label for="lelaki">Lelaki</label>
        <input type="radio" id="Perempuan" name="Jantina" value="Perempuan">
        <label for="Perempuan">Perempuan</label><br><br>
        <label>Emel:</label>
        <input type="text" id="email" name="email" value="Emel Anda"><br><br>
        <label>Komentar:</label><br>
        <textarea name="message" rows="10" cols="30">
        </textarea><br><br>
        <input type="reset" value="Reset">
        <input type="submit" value="Hantar">
      </fieldset>
        </form>
    </body>
</html>
        