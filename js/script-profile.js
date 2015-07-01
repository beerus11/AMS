$(document).ready(function () {
    $('#sidebar').affix({
        offset: {
            top: 230,
            bottom: 100
        }
    });
    $('#midCol').affix({
        offset: {
            top: 230,
            bottom: 100
        }
    });
    $.ajax({
        url: "check_profile.php?type=ajax",
        dataType: "JSON",
        success: function (data) {
            //here inside json variable you've the json returned by your PHP
            var json = JSON.parse(data);
            if (json.rows == 0) {
                $('#page_alert').html($('#page_alert').html() + '<strong>Warning!</strong> Please Complete your Profile !');
            }
        }
    })
    $("#form1").submit(function (event) {
        event.preventDefault();
        var $form = $(this);
        var firstname = $form.find("input[name='firstname']").val();
        showalert(firstname);
        //console.log(firstname);
        var middlename = $form.find("input[name='middlename']").val();
        //console.log(middlename);
        var lastname = $form.find("input[name='lastname']").val();
        //console.log(lastname);
        var email = $form.find("input[name='email']").val();
        //console.log(email);
        var dob = $form.find("input[name='dob']").val();
        //console.log(dob);
        var gender = $form.find("input[name='gender']").val();
        //console.log(gender);
        var mobno = $form.find("input[name='mobno']").val();
        //console.log(mobno);
        var telno = $form.find("input[name='telno']").val();
        //console.log(telno);
        var martial_status = $form.find("select[name='martial_status']").val();
        //console.log(martial_status);
        var user_type = $form.find("select[name='user_type']").val();
        //console.log(user_type);
        var about_me = $form.find("textarea[name='about_me']").val();
        //console.log(about_me);
        var posting = $.post("test.php", {
            form1: {
                f: firstname,
                m: middlename,
                l: lastname,
                e: email,
                d: dob,
                g: gender,
                mob: mobno,
                t: telno,
                ms: martial_status,
                u: user_type,
                about: about_me
            }
        });
        posting.done(function (json) {
            var data = JSON.parse(json);
            alert(data.g);
        });
        posting.fail(function (data) {
            alert("Error in saving the Data Please Try Again!");
        });

    });
});
$(function () {
    $("#datepicker").datepicker();
});
function showalert(data) {
    var a = "<div class='alert alert-info' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
    var b = "</div>";
    $('#form1_alert').html(a + data + b);

}