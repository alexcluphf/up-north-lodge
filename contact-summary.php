<?php 
include 'php/variables.php';
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
            <h1>Submittion Confirmation</h1>
        </div>
        <br>

        <div class="row" id="form-summary">
            <div class="col-8" id="summary-wrapper">
                <h2>You have submitted the below information for review</h2>
                <p>Name:
                    <?php
                        if(empty($firstName) && empty($lastName)){
                            echo 'You have not submitted a name.';
                        }else{
                            echo $firstName . ' ' . $lastName;
                        }
                    ?>
                </p>
                <p>Email:
                    <?php
                        if(empty($email)){
                            echo 'You have not submitted an email.';
                        }else{
                            echo $email;
                        }
                    ?>
                </p>
                <p>Phone Number:
                    <?php
                        if(empty($phoneNum)){
                            echo 'You have not submitted a phone number.';
                        }else{
                            echo $phoneNum;
                        }
                    ?>
                </p>
                <p>Offering:
                    <?php
                        echo $offering;
                    ?>
                </p>
                <p>Notes:
                    <?php
                        if(empty($notes)){
                            echo 'You have not submitted any notes.';
                        }else{
                            echo $notes;
                        }
                    ?>
                </p>
            </div>
        </div>
        <br>            
        <footer class="row">
            <?php include "includes/footer.html"; ?>
        </footer>
    </body>

</html>