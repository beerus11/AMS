<?php
/**
 * Created by PhpStorm.
 * User: Anurag
 * Date: 6/29/2015
 * Time: 11:17 AM
 */
include_once("php_includes/check_login_status.php");
// If user is already logged in, header that weenis away
if ($user_ok == false) {
    header("location: login.php");
    exit();
} else {

    $sql = "SELECT * FROM users WHERE id='$log_id' AND username='$log_username' AND password='$log_password' AND activated='1' LIMIT 1";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_row($query);
    $username = $row[1];
    $email = $row[2];
    $user_type = "";
    if ($row[4] == 'g') {
        $user_type = "GUEST";
    } else if ($row[4] == 's') {
        $user_type = "STUDENT";

    } elseif ($row[4] == 'xs') {
        $user_type = "X-STUDENT";

    } elseif ($row[4] == 't') {
        $user_type = "TEACHER";

    } else {
        $user_type = "NA";
    }
    $last_login = $row[6];


    include_once('php_includes/profile_header.php');
    include_once('check_profile.php');
}

?>
<!-- NAVBAR CODE END -->


<div class="row profile">
    <div class="col-md-3">
        <?php include_once('php_includes/side_bar.php'); ?>
    </div>
    <div class="col-md-9">
        <div class="profile-content">
            <div class="alert alert-info">
                <h2><?php
                    echo ucfirst($_GET['u']) . ""; ?></h2>

                <p><strong>Email: </strong> <? echo $email; ?> </p>


                <p><strong>UserLevel: </strong> <? echo $user_type; ?>
                </p>
                <hr>
                <h4>About Me: </h4>

                <p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum eiusmod.
                </p>
            </div>
        </div>
    </div>
</div>


<br>
<br>

<!-- CONATINER END -->

<!-- REQUIRED SCRIPTS FILES -->
<!-- CORE JQUERY FILE -->
<script src="js/jquery.js"></script>
<!-- REQUIRED BOOTSTRAP SCRIPTS -->
<script src="js/bootstrap.js"></script>
<script src="js/script-index.js"></script>
</body>

</html>
