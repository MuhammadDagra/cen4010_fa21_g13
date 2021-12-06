<?php
    date_default_timezone_set('America/New_York');
    include './php/connect.php';
    include './php/comments.arms.inc.php';
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


    <link rel="stylesheet" type="text/css" href="./css/arms_css.css">
    <link rel="stylesheet" type="text/css" href="./css/comments.css">
</head>
<body>
        <?php 
            include_once './header.php'
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
                <h1>AR<span id="blue">MS</span></h1>
                
            <div class="clip">

                <p>By following this workout you’ll be able to have biceps you’ve never seen before. Just dont sit back and relax. Make sure to
                    follow this work-out to make your Arms look like you’ve always dreamed of. Here’s my challenge to you this year: honor your well-being during this long weekend by setting a goal to be active and move your body.
                    this circuit-style workout is the perfect way to do that, whether you choose to complete it at home, at the club, or in the outdoors.
                </p>

                <center>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wwKb-wZCEjs?start=73" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </center>
                <center>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/RTF4ADblouI?start=73" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </center>
                <br>
                <button onclick='location.href="./services.php"'>Go Back</button>
                
            </div>
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