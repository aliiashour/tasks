<?php

    if(isset($_POST["task"])){
        
        $mysql = new mysqli("localhost", "root", "", "EX") or die("There Is No Database Called 'EX' "); 
        $q = "INSERT INTO info(task) VALUES ('".$_POST["task"]."') " ;
        $mysql -> query($q) ; 
        echo "<h1>Data Had Submitted Successfully :)</h1>" ; 
    }else if(isset($_GET['id'])){
        
        $mysql = new mysqli("localhost", "root", "", "EX") or die("There Is No Database Called 'EX' "); 
        $q = "DELETE FROM `info` WHERE `info`.`id` = ".$_GET['id'].""  ;
        $mysql -> query($q) ; 
        echo "<h1 align='center' class='' style='margin:50px auto ; background-color:#0652dd;color:#FFF'>Data Had SuccessFully Deleted :)</h1>" ;
        header("refresh:3;url='index.php'") ; 
    }else{
        echo "<h1 align='center' class='' style='margin:50px auto ; background-color:red;color:#FFF'>Sorry You Are Not Allowed To Be Here :(</h1>" ; 
    }
?>