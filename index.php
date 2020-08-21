<?php 
    
    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>Simple Tasks App</title>
<!--        libarary css files      -->
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
<!--        my own css files        -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <div class="box" style="width:800px; margin:50px auto">
            <h1 algin="center" class="text-center">Enter Your Task :)</h1>
            <form id='form' action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <textarea name="task" class="form-control" cols="60" rows="6" placeholder="Enter Your Task...." ></textarea>
                <button name="sub" class="form-control btn btn-primary" style="margin:10px 0px" >Save Task</button>
            </form>            
        </div>
        <div class="container"></div>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(function(){
                
                $("button[name='sub']").on("click", function(){
                    
                    var task = $.trim($("textarea").val()) ; 
                    if(task != "" ){
                        
                        $.ajax({
                            method:"POST",
                            url:"operation.php",
                            data:{task:task},
                            success:function(data){
                                if(data){
                                    $(".container").load("operation.php") ;
                                } 
                                    $(".container").load("operation.php") ;
                            },
                            error:function(xml, responceM){
                                
                            }
                            
                            
                        });
                        
                    }
                });
                $.ajax({

                    url:"fetch.php",
                    success:function(data){
                        if(data){
                            
                            $(".container").load("fetch.php") ;
                        
                        } 
                    },
                    error:function(xml, responceM){
                        
                    }
                });
                
            });
        </script>
    </body>
</html>