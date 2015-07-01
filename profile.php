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
}

?>
<!-- NAVBAR CODE END -->


<div class="row profile">
    <div class="col-md-3">
        <?php include_once('php_includes/side_bar.php'); ?>
    </div>
    <div class="col-md-9">
        <div id="page_alert" class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div>
        <div class="profile-content-2">
            <div class="row">
                <div class="well profile" style="margin-top: -40px; margin-bottom: 40px;">

                    <h2><?php
                        echo ucfirst($_GET['u']) . ""; ?></h2>

                    <p><strong>Email: </strong> <? echo $email; ?> </p>


                    <p><strong>UserLevel: </strong> <? echo $user_type; ?>
                    </p>

                    <p><strong>Last Login: </strong> <? echo $last_login; ?>
                    </p>

                    <p><strong>Skills: </strong>
                        <span class="tags">html5</span>
                        <span class="tags">css3</span>
                        <span class="tags">jquery</span>
                        <span class="tags">bootstrap3</span>
                    </p>

                </div>

            </div>
            <div id="form1_alert" class="row">
                <div class="alert alert-info hide" role="alert">
                    <a href="#" class="alert-link"></a>
                </div>
            </div>
            <div class="row">
                <form id="form1" class="form-horizontal" role="form">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Personal Details</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">First Name :</label>

                            <div class="col-sm-10">
                                <input name="firstname" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Middle Name:</label>

                            <div class="col-sm-10">
                                <input name="middlename" type="text" placeholder="Middle Name" class="form-control">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Last Name:</label>

                            <div class="col-sm-10">
                                <input name="lastname" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Email:</label>

                            <div class="col-sm-10">
                                <input name="email" type="text" placeholder="Email:" class="form-control">
                            </div>
                        </div>

                        <!-- Multiple Radios (inline) -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="gender">DOB:</label>

                            <div class="col-sm-4">
                                <input name="dob" id="datepicker" type="text" placeholder="DOB" class="form-control">
                            </div>
                            <label class="col-sm-2 control-label" for="gender">Gender:</label>

                            <div class="col-sm-4">
                                <label class="radio-inline" for="gender-0">
                                    <input name="gender" id="gender-0" value="male" checked="checked" type="radio">
                                    Male
                                </label>
                                <label class="radio-inline" for="gender-1">
                                    <input name="gender" id="gender-1" value="female" type="radio">
                                    Female
                                </label>
                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Mob No:</label>

                            <div class="col-sm-4">
                                <input name="mobno" type="text" placeholder="Moblie No" class="form-control">
                            </div>
                            <label class="col-sm-2 control-label" for="textinput">Tel No:</label>

                            <div class="col-sm-4">
                                <input name="telno" type="text" placeholder="Telephone No" class="form-control">
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="martial_status">Martial Status</label>

                            <div class="col-md-4">
                                <select id="martial_status" name="martial_status" class="form-control">
                                    <option value="u">Unmarried</option>
                                    <option value="m">Married</option>
                                    <option value="d">Divorced</option>
                                </select>
                            </div>
                            <label class="col-md-2 control-label" for="user_type">User Type</label>

                            <div class="col-md-4">
                                <select id="user_type" name="user_type" class="form-control">
                                    <option value="s">Student</option>
                                    <option value="xs">X-Student</option>
                                    <option value="g">Guest</option>
                                    <option value="t">Teacher</option>
                                </select>
                            </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="about me">About Me</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" placeholder="(Not More Than 250 words)" id="about me"
                                          name="about_me"></textarea>
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

                <form id="form2" class="form-horizontal" role="form">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Education Details</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">10th:</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="10th" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">12th:</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="12th" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">College:</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="college" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Company:</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="company" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">City:</label>

                            <div class="col-sm-10">
                                <input type="text" placeholder="City" class="form-control">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">State:</label>

                            <div class="col-sm-4">
                                <input type="text" placeholder="State" class="form-control">
                            </div>

                            <label class="col-sm-2 control-label" for="textinput">Postcode:</label>

                            <div class="col-sm-4">
                                <input type="text" placeholder="Post Code" class="form-control">
                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="textinput">Country:</label>

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

                <form id="form3" class="form-horizontal" role="form">
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="js/jquery.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- REQUIRED BOOTSTRAP SCRIPTS -->
<script src="js/bootstrap.js"></script>
<script src="js/script-profile.js"></script>
</body>

</html>
