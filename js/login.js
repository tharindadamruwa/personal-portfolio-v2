$(document).ready(function () {
    
    $("#submit").click(function (e) { 

        e.preventDefault();
       
        var formData = $(".login_container").serialize();

        $.post(

            "php/login.php", 
            formData,
            function(data, status){
                
                if (data == "success" && status == "success") {
                    
                    $(".error-txt").text(data);
                    $(".error-txt").css("display", "block");
                    $(".error-txt").css("background", "#009688");

                    window.location.replace("admin.php");

                } else {

                    $(".error-txt").text(data);
                    $(".error-txt").css("display", "block");

                }

            }
            
        );        
        
    });

});