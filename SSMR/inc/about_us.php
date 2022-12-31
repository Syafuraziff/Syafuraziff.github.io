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
        <title> Tentang Kami</title> 
        <style>
            body {
                height: 900px;
                background: linear-gradient(#000000, #009190 0%, #bc85a3 51%, #FFFFFF  75%);
            }
            ul#menu li {
            display:inline;
            }
            * {
              box-sizing: border-box;
            }

            /* Create two equal columns that floats next to each other */
            .column {
              float: left;
              width: 50%;
              padding: 10px;
              height: 500px; /* Should be removed. Only for demonstration */
            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }

            tr:nth-child(even) {
              background-color: #dddddd;
            }
        </style>
    </head>
    <body>
    <ul id="menu">
        <li><a href=index.php>Home &emsp;</a></li>
        <li> </li>
        <li><a href=photo_gallery.php>&emsp; Photo Gallery&emsp;</a></li>
        <li> </li>
        <li><a href=about_us.php>&emsp;About Us&emsp;</a></li>
        <li> </li>
        <li><a href=comment.php>&emsp;Comment&emsp;</a></li>
    </ul>       
    <p><img height = 200 width=100% src = "image/banner.jpg"></p> 
    <div class="row">
      <div class="column" style="background-color:#aaa;">
        <h2>Tentang Saya</h2>
        <table>
          <tr>
            <th>Nama</th>
            <td>Ummi Syuhada binti Adnan</td>
          </tr>
          <tr>
            <th>Umur</th>
            <td>21 Tahun</td>
          </tr>  
          <tr>
            <th>Tempat Tinggal</th>
            <td>Kuantan, Pahang</td>
          </tr>  
          <tr>
            <th>Tarikh Lahir</th>
            <td>19 September 2000</td>
          </tr>
            <th>Bangsa</th>
            <td>Melayu</td>
          </tr>
          <tr>
            <th>Makanan/Minuman Kegemaran</th>
            <td>Sushi/Kopi</td>
          </tr>  
          <tr>
            <th>Cita-cita</th>
            <td>Data Analyst</td>
          </tr>  
          <tr>
            <th>Motto</th>
            <td>'It's better to regret what you have done than what you haven't.</td>
          </tr>          
        </table>  
      </div>
      <div class="column" style="background-color:#bbb;">
        <h2>Tentang Institusi Saya</h2>
        <table>
          <tr>
            <th>Nama</th>
            <td>UiTM Terengganu Kampus Cendering</td>
          </tr>         
          <tr>
            <th>Misi</th>
            <th>Visi</th>
          </tr>
          <tr>
            <td>Menjuarai pembangunan bumiputera profesional yang tangkas menerusi kurikulum terkehadapan dan penyelidikan berimpak.</td>
            <td>Menjadikan UiTM sebuah universiti terkemuka dunia dalam bidang Sains, Teknologi, Kemanusiaan dan Keusahawanan.</td>
          </tr>
        <tr>
            <th>Falsafah</th>
            <th>Objektif</th>
          </tr>
          <tr>
            <td>Setiap individu mampu mencapai kecemerlangan melalui pemindahan ilmu serta penerapan nilai-nilai murni agar menjadi graduan profesional yang berupaya mengembangkan ilmu dan membangunkan diri, masyarakat dan negara.</td>
            <td>
                <ol>
                    <li>Memperluas akses pendidikan tinggi</li>
                    <li>Menyediakan Pendidikan bertaraf dunia</li>
                    <li>Menghasilkan graduan seimbang berciri keusahawanan yang kompetitif di peringkat global</li>
                </ol>
            </td>
          </tr>          
        </table>  
        </div>
    </body>
</html>