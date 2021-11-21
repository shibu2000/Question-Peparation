$(document).ready(function(e){
    console.log("Form Loaded");
    // Submit form data via Ajax
    $("#fupForm").on('submit', function(e){
        console.log("Function Loaded");
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'testSubmit.php',
            data: $('#fupForm').serialize(),
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(data){ 
                // console.log(response);
                $('.statusMsg').html(data).fadeOut(5000);
               
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });
});