<?php
session_start();
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM destination WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $name = $data['name'];
        $price = $data['price'];
        $description = $data['description'];
        $picture = $data['picture'];
        $lng = $data['longitude'];
        $lat = $data['latitude'];
    } else {
        $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
    }
};
mysqli_close($connect);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <!-- css link of Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap icon link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Gooogle font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Happy+Monkey&family=Lobster+Two&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&family=Great+Vibes&family=Happy+Monkey&family=Kalam:wght@700&family=Lobster+Two&display=swap" rel="stylesheet">

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
    <title>Infos</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        .manageProduct {
            margin: auto;
                    }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }

        td {
            text-align: center;
            vertical-align: middle;
        }

        tr {
            text-align: center;
        }

        #map {

            height: 60%;

        }


        html,
        body {

            height: 80%;

            margin: 50px;
            
            padding: 0;

        }
    </style>

</head>

<body style="font-family:serif " class="text-center">
<div><img class="img-tumbnail" src="<?php echo 'pictures/' . $picture ?>" alt=""></div>

    <div>

        <h1><?php echo $name ?></h1>
        <h2>Price: <?php echo $price ?> Euro Day</h2>
        <h3></i>Description: <?php echo $description ?></i></h3>
        <a href=<?php echo 'booking.php?id=' . $id ?>></a></div>
        <div id="map"></div>

        <script>

            var map;

            function initMap() {

                map = new google.maps.Map(document.getElementById('map'), {

                center: {lat: $lat, lng: $lng}, zoom: 8

                });

            }

        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>

        <script>

var map;

function initMap() {

    var vienna = {

        lat: <?php echo $lat?>,

        lng: <?php echo $lng?>,

    };

    map = new google.maps.Map(document.getElementById('map'), {

        center: vienna,

        zoom: 8

    });

    var pinpoint = new google.maps.Marker({

        position: vienna,

        map: map

    });

}
</script>

<div>
        <a href='index.php'><button style="padding: 1rem; width: 300px;" class='btn btn-primary btn-sm' type='button'>Back</button></a>


    </div>



</body>