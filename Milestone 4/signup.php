<link rel="stylesheet" type="text/css" href="css/index_style.css">
    <?php 
        include_once 'header.php'
    ?>

<br>
<br>
    <div class="cont"> 
        <form action="./php/login.inc.php" method="post">
        <div class="form sign-in">
                <h2>Welcome to ETL</h2>
                <center>"Gym from Home"</center>
                <label for="email">
                        <span>Email</span>
                        <input
                            type="text"
                            class="form-control"
                            id="email"
                            name="email"
                        />
                    </label>
                    <label for="password">
                        <span>Password</span>
                        <input 
                            type="password" 
                            class="form-control"
                            id="password"
                            name="password"
                        />
                    </label>
                <p class="forgot-pass">Trouble in login?</p>
                <button type="submit" class="submit" name="submit">Login</button>
                <link href="./css/signup_style.css" rel="stylesheet" />
            <?php
                    
                if (isset($_GET["error"])){
                    if ($_GET["error"] == "emptyinput"){
                        echo "<center><p style='color:red'>Fill in all Fields!</p></center>";;                        
                    } 
                    else if ($_GET["error"] == "invalidfirstname"){
                        echo "<center><p style='color:red'>Choose a Proper First Name!</p></center>";;
                    }  
                    else if ($_GET["error"] == "invalidlastname"){
                        echo "<center><p style='color:red'>Choose a Proper Email!</p></center>";
                    }  
                    else if ($_GET["error"] == "invalidemail"){
                        echo "<center><p style='color:red'>Choose a Proper Email!</p></center>";
                    }  
                    else if ($_GET["error"] == "invalidpassword"){
                        echo "<center><p style='color:red'>Choose a Proper Password!</p></center>";;
                    }  
                    else if ($_GET["error"] == "emailtaken"){
                        echo "<center><p style='color:red'>Email already in use!</p></center>";;
                    } 
                    else if ($_GET["error"] == "none"){
                        echo "<center><p style='color:blue'>Sign up Successful!</p></center>";
                    }
                    else if ($_GET["error"]== "wronglogin") {
                        echo "<center><p style='color:red'>Incorrent login information!</p></center>";
                    }              
                }
            ?>
            </div>
            
        </form> 
            
        
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                 
                    <h3>Don't have an account? Please Register!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has an account, just login.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Register</span>
                    <span class="m--in">Login</span>
                </div>
            </div>
            <form action="./php/signup.inc.php" method="post">
                <div class="form sign-up">
                    <h2>Register with your Info</h2>
                    <label for="firstName">
                        <span>First Name</span>
                        <input 
                            type="text"
                            class="form-control"
                            id="firstName"
                            name="firstName"
                        />
                    </label>
                    <label for="lastName">
                        <span>Last Name</span>
                        <input 
                            type="text"
                            class="form-control"
                            id="lastName"
                            name="lastName"
                        />
                    </label>
                    <label for="email">
                        <span>Email</span>
                        <input
                            type="text"
                            class="form-control"
                            id="email"
                            name="email"
                        />
                    </label>
                    <label for="password">
                        <span>Password</span>
                        <input 
                            type="password" 
                            class="form-control"
                            id="password"
                            name="password"
                        />
                    </label>
                    <button type="submit" class="submit" name="submit">Register</button>
            
                </div>
            </form>
            
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>