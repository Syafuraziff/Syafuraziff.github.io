<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <style>
            body {
                height: 900px;
                background: linear-gradient(#000000, #009190 0%, #bc85a3 51%, #000000  75%);
            }
            ul#menu li {
            display:inline;
            }
            /* Float four columns side by side */
            .column {
              float: left;
              width: 25%;
              padding: 0 10px;
            }

            /* Remove extra left and right margins, due to padding */
            .row {margin: 0 -5px;}

            /* Clear floats after the columns */
            .row:after {
                
              content: "";
              display: table;
              clear: both;
            }

            /* Responsive columns */
            @media screen and (max-width: 600px) {
              .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
              }
            }

            /* Style the counter cards */
            .card {
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
              padding: 16px;
              text-align: center;
              background-color: #f1f1f1;
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
        <li> </li>
        <li><a href=logout.php>&emsp;Logout&emsp;</a></li>
</ul>
    </body>
</html>