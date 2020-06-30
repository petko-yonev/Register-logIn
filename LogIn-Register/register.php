<?php
//print_r($_POST);
$raw_data = file ("data.csv");

$username =  $_POST["Username"];
$password =  $_POST["Password"];
$email = $_POST["Email"];

foreach($raw_data as $v){
    $temp = explode (",", $v);
    
    if(findUserPass($temp) == true){
        echo "Username or email already exists";
    
    }   
}

function findUserPass($ar){

    $username =  $_POST["Username"];
    $email = $_POST["Email"];

    if($ar[0] === $username || $ar[2] === $email){
        
        return true;
    
        
    }
}

if(findUserPass($temp) !== true){
    file_put_contents("data.csv", "$username,$password,$email\n", FILE_APPEND);
    echo "Welcome".$username;

}   

