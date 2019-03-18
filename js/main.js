$(document).ready(function(){ 
    $("#autosubmit").click(function(){
        var content = $("#body").val();
        if($.trim(content) != ''){
           $.ajax({
                url:"check/checkrefresh.php",
                method:"POST",
                data:{body:content},
                dataType:"text",
                success:function(data){
                    $('#body').val("");
                }
            }); 
            return false;
        }
    });
    $.ajaxSetup({ cache: false });
    setInterval(function(){
        $("#autostatus").load("check/getrefresh.php").fadeIn("slow");
    }, 1000);
    
 });  