// $(document).on('click', '#show_data', function (e){
//    var id = "show";
//
//    $.ajax({
//       url: 'custom/php/backend.php',
//       type: 'POST',
//        cache: false,
//        data: {id:id},
//        success:function (data){
//           $('#table').html(data);
//        },
//        error: function (request, error){
//           alert("Request: "+JSON.stringify(request));
//        }
//    });
// });

$(document).ready(function (){
    // $(document).on('click', '#show_data', function (e){
        var id = "show";

        $.ajax({
            url: 'custom/php/backend.php',
            type: 'POST',
            cache: false,
            data: {id:id},
            success:function (data){
                $('#table').html(data);
            },
            error: function (request, error){
                alert("Request: "+JSON.stringify(request));
            }
        });
    // });
});
