<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bidworker</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a href="index.php" class="navbar-brand">
                <img src="img/bidworkersnall.png" alt="logo" width="150" height="33"
                 class="d-inline-block"/><span class="hidden">logo</span>
            </a>
            <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#toggleMobileMenu" 
            aria-expanded="false" 
            aria-controls="#toggleMobileMenu"
            aria-lable="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            
            </button>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav ms-auto text-center">
                    <li><a class='nav-link' href='index.php'>Home</a></li>
                    <li><a class='nav-link' href='index.php'>About Us</a></li>
                    <li><a class='nav-link' href='index.php'>Blog</a></li>

                    
                    <?php

                    if(isset($_SESSION["useruid"])){
                        echo"<li><a class='nav-link' href='work.php'>Work</a></li>";
                        echo"<li><a class='nav-link' href='jobPost.php'>Post a Job</a></li>";
                        echo"<li><a class='nav-link' href='profile.php'>Profile</a></li>";
                        echo"<li><a class='nav-link' href='includes/logout.inc.php'>Logout</a></li>";
                        

                    }
                    else{

                        
                        echo"<li><a class='nav-link' href='login.php'>Login</a></li>";
                        echo"<li><a class='nav-link' href='signup.php'>Sign up</a></li>";







                    }

                    ?>
                </ul>
                    
            </div>
        </nav>
    </nav>