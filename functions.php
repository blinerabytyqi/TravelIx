<?php

global $dbcon;

function connection(){
    $dbcon=mysqli_connect('localhost','root','','reservation');
    
    if(!$dbcon){
        die("Lidhja me databaze deshtoi!");
    }
    
    return $dbcon;
}

connection();


function merrKlientet(){
    
    $dbcon=connection();
    $sql="SELECT * FROM klientet ORDER BY klientiid asc";
    $result=mysqli_query($dbcon,$sql);
    return $result;
    
}


 function shto_Klient($fullname,$citylive,$citygo,$comment){
     
     $dbcon=connection();
     $sql="INSERT INTO klientet(fullname,cityLiving,cityGoing,comment)";
    $sql.=" VALUES('$fullname','$citylive','$citygo','$comment')";
     $result=mysqli_query($dbcon,$sql);
     return $result;
 }

 function shto_Rezervim($name,$email,$tel,$notes,$data){
     
     $dbcon=connection();
     $sql="INSERT INTO rezervimiKlientit(name,email,tel,notes,data)";
    $sql.=" VALUES('$name','$email','$tel','$notes','$data')";
     $result=mysqli_query($dbcon,$sql);
     return $result;
 
 }


?>