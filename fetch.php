<?php

    $mysql = new mysqli("localhost", "root", "", "EX") or die("There Is No Database Called 'EX' "); 
    $q = "SELECT * FROM info ORDER BY id DESC" ;
    $res = $mysql -> query($q) ;
    
    if($res -> num_rows){
        
        
        $output = "" ; 
        while($row = $res -> fetch_array(MYSQLI_ASSOC)){
            
            $output .= "<div class='box'>" ; 
            $output .= "<h2>". $row['task'] ."</h2>" ; 
            $output .= "<input hidden type='text' value= ".$row['id']." />" ; 
            $output .= "<span class='left done'>FINSH</span>" ;
            $output .= "<span class='left not done'>UN FINSH</span>" ;
            $output .= "<a name='delete' href='operation.php?id=".$row["id"]."' class='right done'>&times;</a>" ;
            $output .="</div>" ; 
        }
        echo $output ; 
    }else{
         echo "<h1 align='center' class='' style='margin:50px auto ; background-color:red;color:#FFF'>There Is No Taskes Yet :(</h1>" ; 
    }

?>