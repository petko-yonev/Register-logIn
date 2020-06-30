<?php

//print_r($_POST);



$raw_data = file("data.csv");
$username =  $_POST["Username"];


foreach($raw_data as $v){
    $temp = explode (",", $v);
    
    if(findUserPass($temp) == true){
        echo "Welcome".$username;
    
    }   
}

function findUserPass($ar){

    $username =  $_POST["Username"];
    $password =  $_POST["Password"];

    if($ar[0] === $username && $ar[1] === $password){
        
        return true;
    
        
    }
}

if(findUserPass($temp) !== true){
    echo "Wrong Username or Password";

}   
