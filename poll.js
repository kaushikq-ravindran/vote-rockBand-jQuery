$(document).ready(function(){
    
    $(".pollLabel").click(function(){
        $("p.error").remove();
        $("a.submitPoll").addClass("enabled");
    });
    
    $("a.submitPoll").click(function(){
        if($(this).hasClass("enabled")){
            var voteValue = $("input[name='pollInput']:checked").val();
        
            $.post( "voteProcess.php", {value: voteValue}, function(data) {
                $(".wrapper.poll").slideUp(400, function() {
                    $(".wrapper.poll").html(data);
                    $(".wrapper.poll").slideDown();
                });
                
            });
            
        }else{
            $(this).before("<p class='error'>You need to select an item in order to vote.</p>");
        }
        
    });
    
});