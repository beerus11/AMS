<?php
/**
 * Created by PhpStorm.
 * User: Anurag
 * Date: 6/29/2015
 * Time: 11:17 AM
 */
include_once('php_includes/profile_header.php');
?>
<!-- NAVBAR CODE END -->


<div class="row profile">
    <div class="col-md-3">
        <div class="profile-sidebar">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
                <img
                    src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg"
                    class="img-responsive" alt="">
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                    <?php
                    echo ucfirst($_GET['u']) . ""; ?>
                </div>
                <div class="profile-usertitle-job">
                    Developer
                </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <div class="profile-userbuttons">
                <button type="button" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-upload"></i> Upload
                </button>
                <button type="button" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i> Delete
                </button>
            </div>
            <!-- END SIDEBAR BUTTONS -->
            <!-- SIDEBAR MENU -->
            <div class="profile-usermenu">
                <ul class="nav">
                    <li class="active">
                        <a href="#">
                            <i class="glyphicon glyphicon-home"></i>
                            Overview </a>
                    </li>

                    <li>
                        <a href="#" target="_blank">
                            <i class="glyphicon glyphicon-ok"></i>
                            Profile </a>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-user"></i>
                            Account Settings </a>
                    </li>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-flag"></i>
                            Help </a>
                    </li>
                </ul>
            </div>
            <!-- END MENU -->
        </div>
    </div>
    <div class="col-md-9">
        <div class="profile-content">
            <div class="alert alert-info">
                <h2>User Bio : </h2>
                <h4>Bootstrap user profile template </h4>

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

</body>

</html>
