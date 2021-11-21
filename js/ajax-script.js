$(document).ready(function(){
    $("#adminForm")[0].reset();
});

$(document).on('submit','#adminForm', function(e){
    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        method: "POST",
        url: "testSubmit.php",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        befoneSend: function(){
            $('button[type="submit"]').attr('disabled', 'disabled');
        },
        success: function(data){
            $('button[type="submit"]').removeAttr('disabled');
            $("#adminForm")[0].reset();
            $('#alertBox').html('<p class="alert alert-warning">'+data+'</p>').fadeIn();
        }
    });
});