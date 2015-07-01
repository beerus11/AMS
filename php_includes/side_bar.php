<?php
/**
 * Created by PhpStorm.
 * User: Anurag
 * Date: 6/30/2015
 * Time: 7:44 AM
 */
?>
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
                <a href="login.php">
                    <i class="glyphicon glyphicon-home"></i>
                    Home</a>
            </li>

            <li>
                <a href="profile.php?u=<?php
                echo $_GET['u']; ?>" target="_self">
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