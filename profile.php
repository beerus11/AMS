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
        <div class="profile-content-2">
            <div class="row">
                <div class="well profile" style="margin-top: -40px; margin-bottom: 40px;">

                    <h2><?php
                        echo ucfirst($_GET['u']) . ""; ?></h2>

                    <p><strong>About: </strong> Web Designer / UI. </p>

                    <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new
                        things.
                    </p>

                    <p><strong>Skills: </strong>
                        <span class="tags">html5</span>
                        <span class="tags">css3</span>
                        <span class="tags">jquery</span>
                        <span class="tags">bootstrap3</span>
                    </p>

                </div>

            </div>
            <div class="row">

                <form class="form-horizontal" role="form">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Personal Details</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Line 1</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Address Line 1" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Line 2</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Address Line 2" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">City</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="City" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">State</label>

                            <div class="col-sm-4">
                                <input type="text" placeholder="State" class="form-control">
                            </div>

                            <label class="col-sm-2 control-label" for="textinput">Postcode</label>

                            <div class="col-sm-4">
                                <input type="text" placeholder="Post Code" class="form-control">
                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Country</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Country" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>

                <!-- /.col-lg-12 -->
            </div>
            <div class="row">

                <form class="form-horizontal" role="form">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Education Details</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Line 1</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Address Line 1" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Line 2</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Address Line 2" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">City</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="City" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">State</label>

                            <div class="col-sm-4">
                                <input type="text" placeholder="State" class="form-control">
                            </div>

                            <label class="col-sm-2 control-label" for="textinput">Postcode</label>

                            <div class="col-sm-4">
                                <input type="text" placeholder="Post Code" class="form-control">
                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Country</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Country" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>

                <!-- /.col-lg-12 -->
            </div>
            <div class="row">

                <form class="form-horizontal" role="form">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Address Details</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Line 1</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Address Line 1" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Line 2</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Address Line 2" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">City</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="City" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">State</label>

                            <div class="col-sm-4">
                                <input type="text" placeholder="State" class="form-control">
                            </div>

                            <label class="col-sm-2 control-label" for="textinput">Postcode</label>

                            <div class="col-sm-4">
                                <input type="text" placeholder="Post Code" class="form-control">
                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Country</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="Country" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>

                <!-- /.col-lg-12 -->
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
