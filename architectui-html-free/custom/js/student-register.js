
function studentRegister(){

    var first_name =document.getElementById('first_name').value;
    var last_name =document.getElementById('last_name').value;
    var address =document.getElementById('address').value;
    var birth_of_date =document.getElementById('birth_of_date').value;
    var username =document.getElementById('username').value;
    var city =document.getElementById('city').value;
    var email =document.getElementById('email').value;
    var zip =document.getElementById('zip').value;
    var password =document.getElementById('password').value;
    var image =document.getElementById('image').files[0];
    let imagePath = "custom/img/" + image.name;
    var phone_number =document.getElementById('phone_number').value;


    var id = "insert";
    var dt ={
        id:id,
        first_name:first_name,
        last_name:last_name,
        address:address,
        birth_of_date:birth_of_date,
        username:username,
        city:city,
        email:email,
        zip:zip,
        password:password,
        phone_number:phone_number,
        image:imagePath,
    }
    // alert(JSON.stringify(dt));

    if (first_name != "" && last_name != "" && address != "" && birth_of_date != "" && username != "" && city != "" && email != "" && zip != "" && password != "" && phone_number != "" && image != ""){
        $.ajax({
            url: 'custom/php/backend.php',
            method: 'POST',
            data: dt,
            success: function (msg){
                // alert(msg);
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                })
                uploadImage(image);
            },
            error: function (request, error){
                alert("Request: " + JSON.stringify(request));
            }
        });
    }else {
        alert('hi');
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
        })
    }

}

// function generatePassword() {
//     var length = 8,
//         charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
//         retVal = "";
//     for (var i = 0, n = charset.length; i < length; ++i) {
//         retVal += charset.charAt(Math.floor(Math.random() * n));
//     }
//     return retVal;
// }

function randomPassword(length) {
    var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
    var pass = "";
    for (var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        pass += chars.charAt(i);
    }
    document.getElementById('password').value = pass;
}

function myFunction() {
    var x = document.getElementById("password");

    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function uploadImage(file) {
    let form_data = new FormData();
    form_data.append('file', file);
    $.ajax({
        url: 'custom/php/upload-img.php',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(php_script_response){
            alert(php_script_response);
        }
    });
}