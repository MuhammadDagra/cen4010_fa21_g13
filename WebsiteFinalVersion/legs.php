<?php
    date_default_timezone_set('America/New_York');
    include './php/connect.php';
    include './php/comments.legs.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K2T0KE6FL1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-K2T0KE6FL1');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">

    <title>ETL_G13</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" type="text/css" href="./css/legs_css.css">
    <link rel="stylesheet" type="text/css" href="./css/comments.css">
</head>
<body>
    <?php 
        include_once 'header.php'
    ?>
    <?php
        if(!isset($_SESSION["name"])){
        header("location: ./signup.php");
        }
    ?>


        <div class="container">
            <div class="left">
                <img src="./images/i10.jpg ">
            </div>
            <div class="right">
                <h1>WELC<span id="blue">OM</span>E</h1>


                <p>Work up a sweat with this sample at-home workout from our program. Our Challenge is right around the corner and our anthem for this coming event is all about saying hello to a fresh start. With a year of ongoing change and pivots, our flagship challenge offering can be a great starting point for getting into a more consistent routine with your fitness and healthy-eating habits.
                    This challange comes with all sorts of bells and whistles for participants, but new this last round we introduced virtual, trainer-led Saturday Sweat Session workouts which quickly became an extremely popular part of our offering.
                    
                </p>
                
            </div>
        </div>



    </header>



    <section id="services">

        <div class="services-info">
                <h1>LE<span id="blue">GS</span></h1>
                    <p>
                        Whatever your fitness goals are, whatever your current level of fitness and experience is, and whatever equipment and space you have available, there’s a workout for you on this website.

                        However, it’s rare that we come across a single session that suits just about everyone. So when the team at activewear brand Sundried shared this lower-body session, we were all too happy to pass it on to you.

                        You’ll work through three sets of each exercise in the workout, hitting your legs and glutes particularly hard, but also working your core. It can be done just about anywhere, since all but one of the exercises are bodyweight moves, and the odd one out can be done with any DIY weight (we’ve taken to using a couple of bricks that were lying about the garden).

                        If you have some free weights hanging around, it’s easy to incorporate them to make the workout harder. Other ways of making the workout harder include slowing the movements down so your muscles spend more time under tension, and limiting the amount of rest you give yourself between sets.
                    </p>


                    <center>
                        <img src="./images/sundried-legs-workout.jpg">
                    </center>

                <h2>SQUAT</h2>
                    <center>
                        <img src="./images/squat.jpg">
                    </center>

                        <P>Sets 3 Reps 10</P>
                        <p>Targets Quads, hamstrings and glutes</p>
                        <p>Stand with your feet hip-width apart. Keeping your chest up and back straight throughout, bend your knees and lower, pushing your hips back until your thighs are parallel to the ground. Then drive through your heels to return to standing.</p>

                        <h2>LUNGES</h2>
                        <center>
                            <img src="./images/lunge.jpg">
                        </center>
    
                            <P>Sets 3 Reps 10 each side</P>
                            <p>Targets Quads, hamstrings and glutes</p>
                            <p>From standing, take a big step forwards with your right foot and lower until both your knees are bent at 90°. Push back up through your right foot to standing. Do all your reps on one leg, then switch to the other.</p>
                            
                            
                <h2>DONKEY KICK</h2>
                    <center>
                        <img src="./images/donkey-kick.jpg">
                    </center>
        
                        <P>Sets 3 Reps 10 each side</P>
                        <p>Targets hamstrings and glutes</p>
                        <p>Get on all fours with your hands under your shoulders and your knees on the floor under your hips. Engage your core and lift one leg behind you, keeping your knee bent so the sole of your foot ends up facing the ceiling. Bring your leg back down slowly. Do all your reps on one leg, then switch.</p>

        </div>
        <center><button onclick='location.href="./services.php"'>Go Back</button></center>
        <div>
        <center>
        <?php
                echo"
                <form method='POST' action='".setComments($conn)."'>
                <input type='hidden' name='uid' value='".$_SESSION['name']."'>
                <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                <textarea name='message'></textarea><br>
                <button type='submit' name='commentSubmit'>Comment</button>
                </form>";
                echo"
                <center>
                ".getComments($conn)."
                </center>";
            ?>    
    
        </center>
        </div>
        
    </section>

    





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
   crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous">
    </script>
</body>
</html>