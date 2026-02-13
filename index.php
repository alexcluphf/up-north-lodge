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
        <script type="text/javascript" src="js/slideshow.js"></script>
    </head>

    <body>
        <header class="row">
            <?php include "includes/header.php"; ?>
        </header>

        <!--Slideshow of some of our offerings--> 
        <!-- Slideshow container -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="images/cottages/lakeside/split-rock.jpg">
            </div>
            
            <div class="mySlides fade">
                <img src="images/cottages/woods/tamarack.jpg">
            </div>
            
            <div class="mySlides fade">
                <img src="images/cottages/lakeside/tettegouche.jpg">
            </div>
            
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- The dots/circles -->
            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>

        <div class="row banner">
            <h1>Book Your Escape to the Great Outdoors!</h1>
        </div>
        <br>    

        <div class="row call-to-action col-9 col-m-11 col-s-11"><!--Call to action for booking a stay-->
            
            <div class="col-8 col-m-8 col-s-8">
                <p class="bold">Whether you're seeking a peaceful lakeside retreat or an adventurous stay in the woods, Up North Lodge and Resort offers the perfect getaway. Enjoy cozy cabins, breathtaking views, and countless outdoor activities for all ages. Don’t miss out—reserve your stay today! Experience nature at its finest and create memories that will last a lifetime.</p>
            </div>
            <aside class="col-4 col-m-4 col-s-4">
                <h3>Book with us today!</h3>
                <button>Plan your Vacation</button>
            </aside>
        </div>

        <div class="row secondary-banner col-7 col-m-11 col-s-11"> 
            <h1>Hear from our happy customers:</h1>
        </div>

        <div class="row testimonial col-7 col-m-11 col-s-11"><!--Portrait on right with quote to side-->
            <div class="col-7 col-m-6 col-s-6">
                <p>"I came to Up North Lodge and Resort for a much-needed break from the chaos of everyday life, and it was everything I could have hoped for. Waking up to the sound of the lake, sipping coffee on the deck, and taking slow walks through the woods helped me completely reset. The spa services were a dream, and I even treated myself to a sunset kayak ride. I left feeling refreshed, and I can’t wait to come back next year!"</p>
                <br> 
                <p class="bold">— Sarah M.</p>
            </div>
            <div class="col-5 col-m-6 col-s-6">
                <img src="images/Clients/landscape-tree-nature-forest-girl-woman-hair-photography-sunlight-fall-cute-female-portrait-sitting-autumn-lady-smili.jpg">
            </div>
        </div>
        <div class="row testimonial col-7 col-m-11 col-s-11"><!--Portrait on left with quote on side-->
            <div class="col-5 col-m-6 col-s-6">
                <img src="images/Clients/a-multi-ethnic-group-of-five-young-adult-friends-walking-in-a-forest-during-a-hike-2923711513.jpg">
            </div>
            <div class="col-7 col-m-6 col-s-6">
                <p>"Up North Lodge and Resort was the perfect basecamp for our hiking trip! The trails around Lake Superior were absolutely breathtaking, and coming back to a cozy cabin after a long day on the trails was just what we needed. The staff gave us great recommendations for hidden waterfalls and scenic overlooks, and the bonfire by the lake each night was the best way to wind down. We’re already planning our next trip back!"</p>
                <br> 
                <p class="bold">— Jake, Lisa, Mark, Emily, and Jill</p>       
            </div>
        </div>
        <br>

        <footer class="row">
            <?php include "includes/footer.html"; ?>
        </footer>
    </body>

</html>