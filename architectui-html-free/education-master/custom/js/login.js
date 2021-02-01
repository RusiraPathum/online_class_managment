// A $( document ).ready() block.
function type(t) {
    // var x = "1";
    //
    // if(x == 1) {
    //     alert("1st IF");
    // }
    //
    // if(x === 1) {
    //     alert("int");
    // }else if(x === "1"){
    //     alert("string");
    // }

    alert(t);
    if (t === 1) {
        // alert("still working");
        $("#maths_course").show();
        $("#all_course").hide();
    }
    if (t === 0) {
        $("#all_course").show();
        $("#maths_course").hide();
    }
}

$("#login").click(function () {
    // alert('hi');

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // alert(username);

    if ($.trim(username).length > 0 && $.trim(password).length > 0) {

        var id = "login";

        var dt = {id:id,
            username:username,
            password:password
        };
        // console.log(dt);

        $.ajax({
            url: 'custom/php/backend.php',
            method: 'POST',
            data: dt,
            cache: false,
            success: function (msg) {
                // alert(msg)
                if (msg == 0) {
                    // alert('Incorrect Email or Password');
                    // alert(msg);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Incorrect Username or Password!',
                    })
                } else if (msg == 1) {
                    window.location = "video.php";
                } else {
                    alert('Error in sql query');
                }
            },
            error: function (request, error) {
                alert("Request: " + JSON.stringify(request));
            }
        });
    } else
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Fill the All fields!',
            background: 'purple',
        });
    return false;
});

$("#forgot_password").click(function () {

    var username = document.getElementById('username').value;

    var id = "forgpass";

    $.ajax({
        url: './custom/php/backend.php',
        method: 'POST',
        data: {id: id, username: username},
        success: function (msg) {
            // alert(msg);
            if (msg == "0") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please enter username to proceed with password reset',
                });
            } else {
                // $('#forgot_email').html(msg);
                window.location.replace('forgot_password.php');
            }


        },
        error: function (request, error) {
            alert("Request: " + JSON.stringify(request));
        }
    })
});