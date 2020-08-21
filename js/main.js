$(function(){

    
    $(document).on("click", "span", function(){
       
        
        if($(this).hasClass("left")){
            $(this).prevUntil(".box").css({
                textDecoration:"line-through"
            }) ; 
            
        }
        
        if($(this).hasClass("not done")){
            $(this).prevUntil(".box").css({
                textDecoration:"none"
            }) ; 
            
        }
        
        if($(this).hasClass("right")){
            $(this).parent().fadeOut(900) ; 
            
        }
        
        
    })
    
    
});