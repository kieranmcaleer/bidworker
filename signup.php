<?php
include_once 'header.php';
?>
<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="email" name="email" placeholder="Email Address">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="rpwd" placeholder="Repeat Password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p> Fill in all fields!</p>";
            }
            else if($_GET["error"] == "invaliduid"){
                echo "<p> Make sure your username is correct</p>";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<p> Make sure your email is correct!</p>";
            }
            else if($_GET["error"] == "passwordsdontmatch"){
                echo "<p> Make sure the passwords match!</p>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<p> Something went wrong, try again!</p>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<p> Username already exists!</p>";
            }
            else if($_GET["error"] == "none"){
                echo "<p> You have signed up succesfully!</p>";
            }
        }
        
        ?>
</section>

    

<?php
include_once 'footer.php';
?>






