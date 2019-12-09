<?php
require_once("header.php");

//print_r($_SESSION);

?>

<?php 


?>




<?php
    # this can be used to comment
    // just like this can be used to comment
?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1></H1>
        </div>
        <?php

        echo'<div class="col-12">';
        if(isset($_SESSION["user_id"])):
            echo "<h2>Welcom Back</h2>";
        ?>
            <form action="/actions/login.php" method="post">
                <button type="submit" name="action" value="logout" class="btn btn-warning">
                    Logout
                </button>
            </form> 
        <?php
            else :
        ?>

        <form action="/actions/login.php" method="post" class="col">

        <h2>Login</h2>

            <?php

            include($_SERVER["DOCUMENT_ROOT"]. "/includes/error_check.php");

            ?>

            <div class="form-group">
            <input type="email" name="email" palceholder="Email Address" class="form-control">
            </div>

            <div class="form-group">
            <input type="password" name="password" palceholder="Password" class="form-control">          
            </div>  

            <div class="form-group">
            <p>
            <button type="submit" name="action" value="login" class="btn btn-primary">Login</button>
            </p>

            <p>
            <a href="/signup.php">Create Signup</a>
            </p>
            <p>
            <a href="/stamp_images_browse_carousel.php">Carousel Test</a>
            </p>
            <br>
            <br>
            <br>


        </div>
<?php

    endif;
    echo '</div>';

?>
</div>




<?php
//practice while loops


?>



<?php
require_once("footer.php");

//where to start with project

        //database - posting_den - make tables
            //browse_carousel (stamp table)     
                // automatic id#, country, title_description, style, stamp image link
        //


?>