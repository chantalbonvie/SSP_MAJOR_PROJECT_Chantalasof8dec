<?php require_once("header.php"); 


$user_id = (isset($_GET["user_id"])) ? $_GET["user_id"] : $_SESSION["user_id"];

$user_query = "SELECT * FROM users WHERE id = " . $user_id;
if ($user_request = mysqli_query($conn, $user_query)):
    while ($user_row = mysqli_fetch_array($user_request)):
        //print_r($user_row);
   
?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Change<?php echo $user_row["first_name"]." ".$user_row["last_name"]; ?>'s Password</h1>
            <form action="/actions/edit_user.php" method="POST">
            <?php include($_SERVER["DOCUMENT_ROOT"]."/includes/error_check.php"); ?>
                <input type="hidden" name="user_id" value="<?=$user_row["id"];?>">
                        <div class="form-row mb-2">
                        <div class="row">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        </div>
                    <div class="form-row">
                    <div class="col">
                        <input type="password" name="new_password" placeholder="New password" class="form-control">
                        <input type="password" name="new_password2" placeholder="Confirm New password" class="form-control">

                    </div>
                    </div>

                <hr>
                <?php
                if ($_SESSION["user_id"] == $user_id || $_SESSION["role"] == 1):
                    // * If current user matches profile userid, or if superadmin
                ?>

                <div class="text-right">
                    <a onclick="history.go(-1); "href="#" class="text-link">Cancel</a>
                    <button type="submit" tabindex="9" class="btn btn-primary" name="action" value="change_password">Update Password</button>

                <?php endif; ?>
            </form>
        </div>
    </div>
</div>




<?php

endwhile;
else:
    echo mysqli_error($conn);
endif;

require_once("footer.php"); ?>