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
            <h1>Reach out today!</h1>
        </div>
        <br>

        <div class="row col-8" id="form-wrapper">
            <form method="post" action="contact-summary.php">
                <h2>Please use the below form for any questions, comments, concerns, or bookings you might have!</h2>
                <div class="row col-9" id="form-fname">
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="firstname" placeholder="John">
                </div>
                <div class="row col-9" id="form-lname">
                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lastname" placeholder="Doe">
                </div>
                <div class="row col-9" id="form-email">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="emailaddress" placeholder="example@gmail.com">
                </div>
                <div class="row col-9" id="form-phone">
                    <label for="phonenum">Phone Number:</label>
                    <input type="text" id="phonenum" name="phonenumber" placeholder="(123)456-7890">
                </div>
                <div class="row col-9" id="form-offerings">
                    <label for="offerings">Offerings:</label>
                    <select id="offerings" name="offerings">
                        <?php
                            $sql = "SELECT lodging_description.name
                            FROM lodging_description";
                            
                            $result = mysqli_query($con, $sql);

                            if(!$result){
                                die("Access to table failed: " . mysqli_error($con));
                            }else{
                                while($item = mysqli_fetch_array($result)){
                                    echo '<option value="'. $item['name'] . '">' . $item['name'] . '</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="row col-9" id="form-notes">
                    <label for="notes">Notes:</label>
                    <textarea id="notes" name="notes" placeholder="Ask about our offerings!"></textarea>
                </div>
                <div class="row col-9">
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
        <br>
        <footer class="row">
            <?php include "includes/footer.html"; ?>
        </footer>
    </body>

</html>