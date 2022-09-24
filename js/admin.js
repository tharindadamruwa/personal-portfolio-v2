$(document).ready(function () {
    
    $("#submit").click(function (e) { 

        e.preventDefault();

        var formData = $(".admin_container").serialize();

        $.post(

            "php/admin.php", 
            formData,
            function(data, status){
                
                if (data == "Success" && status == "success") {
                    
                    $(".error-txt").text(data);
                    $(".error-txt").css("display", "block");
                    $(".error-txt").css("background", "#009688");

                    document.querySelector("#pro_name").value = "";
                    document.querySelector("#pro_dec").value = "";
                    document.querySelector("#pro_git").value = "";


                } else {

                    $(".error-txt").text(data);
                    $(".error-txt").css("display", "block");

                }

            }
            
        );  
        
    });

});