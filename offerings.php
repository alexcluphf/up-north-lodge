<?php
    require_once("php/db_connection.php");
    $con = mysqli_connect($servername, $dbusername, $dbpass, $dbname);

    if(!$con){
        die("Connection Failed: " . mysqli_connect_error());
    }
?>
<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Up North Lodge and Resort</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="reset.css">
	    <link rel="stylesheet" href="styles.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>

    <body>
        <header class="row">
            <?php include "includes/header.php"; ?>
        </header>

        <div class="row banner">
            <h1>Book Your Escape to the Great Outdoors!</h1>
        </div> 
        
        <div class="row secondary-banner col-9 col-m-11 col-s-11">
            <h1>Lakeside Cottages</h1>
        </div>
        <div class="row booking-wrapper col-9 col-m-11 col-s-11">
            <?php
                $sql = "SELECT ld.name, ld.price, ld.occupancy, ld.description, ld.image, lodging_type.type, lodging_view.view 
                FROM lodging_description as ld
                INNER JOIN lodging_type on lodging_type.type_id = ld.type_id
                INNER JOIN lodging_view on lodging_view.view_id = ld.view_id
                WHERE lodging_view.view = 'Lakeside' AND lodging_type.type = 'Cabin'";
                    
                $result = mysqli_query($con, $sql);

                if(!$result){
                    die("Access to table failed: " . mysqli_error($con));
                }else{
                    while($item = mysqli_fetch_array($result)){
                        echo '<div class="booking col-12 row">
                            <div class="col-6 col-m-8 col-s-12">
                                <img src="' . $item['image'] .'">
                            </div>
                            <div class="col-6 col-m-4 col-s-12">
                                <h2>' . $item['name'] . '</h2>
                                <p>Sleeps: ' . $item['occupancy'] . '</p>
                                <p>$' . $item['price'] . ' per night</p>
                                <p>' . $item['description'] . '</p>
                                <button onclick="window.location.href=\'contact-us.php\'">Book Now!</button>
                            </div>
                        </div>';
                    }
                }
            ?>
        </div>
        <div class="row secondary-banner col-9 col-m-11 col-s-11">
            <h1>Woodland Cottages</h1>
        </div>

        <div class="row booking-wrapper col-9 col-m-11 col-s-11">
            <?php
                $sql = "SELECT ld.name, ld.price, ld.occupancy, ld.description, ld.image, lodging_type.type, lodging_view.view 
                FROM lodging_description as ld
                INNER JOIN lodging_type on lodging_type.type_id = ld.type_id
                INNER JOIN lodging_view on lodging_view.view_id = ld.view_id
                WHERE lodging_view.view = 'Woodland' AND lodging_type.type = 'Cabin'";
                    
                $result = mysqli_query($con, $sql);

                if(!$result){
                    die("Access to table failed: " . mysqli_error($con));
                }else{
                    while($item = mysqli_fetch_array($result)){
                        echo '<div class="booking col-12 row">
                            <div class="col-6 col-m-8 col-s-12">
                                <img src="' . $item['image'] .'">
                            </div>
                            <div class="col-6 col-m-4 col-s-12">
                                <h2>' . $item['name'] . '</h2>
                                <p>Sleeps: ' . $item['occupancy'] . '</p>
                                <p>$' . $item['price'] . ' per night</p>
                                <p>' . $item['description'] . '</p>
                                <button onclick="window.location.href=\'contact-us.php\'">Book Now!</button>
                            </div>
                        </div>';
                    }
                }
            ?>
        </div>

        <div class="row secondary-banner col-9 col-m-11 col-s-11">
            <h1>Lodge Rooms</h1> 
        </div>

        <div class="row booking-wrapper col-9 col-m-11 col-s-11">
        <?php
                $sql = "SELECT ld.name, ld.price, ld.occupancy, ld.description, ld.image, lodging_type.type, lodging_view.view 
                FROM lodging_description as ld
                INNER JOIN lodging_type on lodging_type.type_id = ld.type_id
                LEFT JOIN lodging_view on lodging_view.view_id = ld.view_id
                WHERE lodging_type.type = 'Up North Main Lodge'";
                    
                $result = mysqli_query($con, $sql);

                if(!$result){
                    die("Access to table failed: " . mysqli_error($con));
                }else{
                    while($item = mysqli_fetch_array($result)){
                        echo '<div class="booking col-12 row">
                            <div class="col-6 col-m-8 col-s-12">
                                <img src="' . $item['image'] .'">
                            </div>
                            <div class="col-6 col-m-4 col-s-12">
                                <h2>' . $item['name'] . '</h2>
                                <p>Sleeps: ' . $item['occupancy'] . '</p>
                                <p>$' . $item['price'] . ' per night</p>
                                <p>' . $item['description'] . '</p>
                                <button onclick="window.location.href=\'contact-us.php\'">Book Now!</button>
                            </div>
                        </div>';
                    }
                }
            ?>
        </div>

        <div class="row secondary-banner col-9 col-m-11 col-s-11">
            <h1>Houses</h1> 
        </div>

        <div class="row booking-wrapper col-9 col-m-11 col-s-11">
        <?php
                $sql = "SELECT ld.name, ld.price, ld.occupancy, ld.description, ld.image, lodging_type.type, lodging_view.view 
                FROM lodging_description as ld
                INNER JOIN lodging_type on lodging_type.type_id = ld.type_id
                LEFT JOIN lodging_view on lodging_view.view_id = ld.view_id
                WHERE lodging_type.type = 'House'";
                    
                $result = mysqli_query($con, $sql);

                if(!$result){
                    die("Access to table failed: " . mysqli_error($con));
                }else{
                    while($item = mysqli_fetch_array($result)){
                        echo '<div class="booking col-12 row">
                            <div class="col-6 col-m-8 col-s-12">
                                <img src="' . $item['image'] .'">
                            </div>
                            <div class="col-6 col-m-4 col-s-12">
                                <h2>' . $item['name'] . '</h2>
                                <p>Sleeps: ' . $item['occupancy'] . '</p>
                                <p>$' . $item['price'] . ' per night</p>
                                <p>' . $item['description'] . '</p>
                                <button onclick="window.location.href=\'contact-us.php\'">Book Now!</button>
                            </div>
                        </div>';
                    }
                }
            ?>
        </div>

        <footer class="row">
            <?php include "includes/footer.html"; ?>
        </footer>
    </body>

</html>