<?php 
require_once 'actions/db_connect.php';

$sql = "SELECT * FROM destination";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            <td><img class='img-thumbnail' src='pictures/" .$row['picture']."'</td>
            <td>" .$row['name']."</td>
            <td>" .$row['price']."</td>
            <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a><a href='moreinfo.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Details</button></a></td>
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mount Everest</title>
        <?php require_once 'components/boot.php'?>
         <!-- Fontawesome link-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Animation CDN -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
   <!-- Link Swiper's CSS -->
   <link
   rel="stylesheet"
   href="https://unpkg.com/swiper/swiper-bundle.min.css"
 />
  <!-- Cloudflare CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/imagehover.css/2.0.0/css/imagehover.min.css">
  <!-- AniCollection.css library -->
  <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
        <style type="text/css">
            .manageDestination {           
                margin: auto;
                background-color: #FAF0E6;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: center;
                            }
        </style>
    </head>
    <body>
                <!-- nav bar -->

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="pictures/logo.jpg" alt="Travel agency logo" class="logo-image"></a>
      <button class="navbar-toggler bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0  animate__animated animate__bounce animate__delay-1s animate__slower	3s">
          <li class="nav-item">
            <a class="nav-link active text-info" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-info" href="#">About Us</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-info" href="index.php">Index</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-info" href="displayall.php">API Data</a>
          </li>
           <li class="nav-item">
            <a class="nav-link text-info" href="#">Kontakt</a>
          </li>
        
         
        </ul>
       
      </div>
    </div>
  </nav>
                <div class="manageDestination w-75 mt-3">    
            <div class='mb-3'>
                <a href= "create.php"><button class='btn btn-primary'type="button" >Add Destination</button></a>
            </div>
            <p class='h2'>Choose one of our destinations</p>
            <table class='table table-striped table-dark'>
                <thead class='table-success'>
                    <tr>
                        <th><strong>Picture</strong></th>
                        <th><strong>Name</strong></th>
                        <th><strong>Price</strong></th>
                        <th><strong>Action</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
        </div>
        </body>
</html>