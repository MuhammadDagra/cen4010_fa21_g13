<?php
    session_start();
?>
<header>
        <nav>
            <div class='logo'>
                <span id="blue">E2</span>L
                

            </div>
            <div class=menu>
                <a href="./index.php">Home</a>
                <?php
                    if(isset($_SESSION["name"])){
                        echo"<a href='./services.php' style='color:green;'>Services</a>";                       
                    }                    
                ?>                
                <a href="./our_mission.php">Our Mission</a>
                <a href="./about_us.php">About Us</a>
            </div>

            <div class="menu">
                <?php
                    if(isset($_SESSION["name"])){
                        echo "<a href='#'>".$_SESSION["name"]."</a>";
                        echo "<a href='./php/logout.inc.php'>Logout</a>";
                    }
                    else {
                        echo "<a href='./signup.php'>Login</a>";
                        echo "<a href='./signup.php'>Sign Up</a>";
                    }
                ?>
                
            </div>
            
        </nav>