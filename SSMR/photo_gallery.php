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
        <title> Galeri Foto</title> 
        <style>
            body {
                height: 900px;
                background: linear-gradient(#000000, #ffffff 0%, #009190 51%, #ffffff  75%);
            }
            ul#menu li {
            display:inline;
            }
            .row {
              display: -ms-flexbox; /* IE10 */
              display: flex;
              -ms-flex-wrap: wrap; /* IE10 */
              flex-wrap: wrap;
              padding: 0 4px;
            }

            /* Create four equal columns that sits next to each other */
            .column {
              -ms-flex: 25%; /* IE10 */
              flex: 25%;
              max-width: 25%;
              padding: 0 4px;
            }

            .column img {
              margin-top: 8px;
              vertical-align: middle;
              width: 100%;
            }

            /* Responsive layout - makes a two column-layout instead of four columns */
            @media screen and (max-width: 800px) {
              .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
              }
            }

            /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
              .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
              }
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
        <h1>Galeri<strong> Foto</strong>!</h1>
        <div class="row"> 
          <div class="column">
            <img height = 200 width=200 src="image/gallery/1.JPG" alt="IMage" class="img-fluid">
            <figcaption>Fig.1 - Menara Teruntum, Kuantan.</figcaption>
            <img height = 200 width=200 src="image/gallery/2.JPG" alt="IMage" class="img-fluid">
            <figcaption>Fig.4 - Art Street, Kuantan.</figcaption>         
            <img height = 200 width=200 src="image/gallery/3.JPG" alt="IMage" class="img-fluid">
            <figcaption>Fig. 7- Bandar Kuantan.</figcaption>   
        </div>
          <div class="column">
            <img height = 200 width=200 src="image/gallery/4.JPG" alt="IMage" class="img-fluid">
            <figcaption>Fig.2 - Masjid SAS., Kuantan.</figcaption>
            <img height = 200 width=200 src="image/gallery/5.JPG" alt="IMage" class="img-fluid">
            <figcaption>Fig.5 - Art Street, Kuantan.</figcaption>         
            <img height = 200 width=200 src="image/gallery/6.JPG" alt="IMage" class="img-fluid">
            <figcaption>Fig.8 - Masjid SAS., Kuantan.</figcaption>   
        </div>
          <div class="column">
            <img height = 200 width=200 src="image/gallery/8.JPG" alt="IMage" class="img-fluid">
            <figcaption>Fig.3 - Tasik Kenyir.</figcaption>
            <img height = 200 width=200 src="image/gallery/9.JPG" alt="IMage" class="img-fluid">
            <figcaption>Fig.6 - Tasik Kenyir.</figcaption>         
            <img height = 200 width=200 src="image/gallery/10.JPG" alt="IMage" class="img-fluid">
            <figcaption>Fig.9 - Tasik Kenyir.</figcaption>   
        </div>               
    </div>
    </body>
</html>
        