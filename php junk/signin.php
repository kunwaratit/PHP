<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
   
    if(isset($_POST['username'])){
    $name=$_POST['username'];        
    }
    if(isset($_POST['useremail'])){
    $email=$_POST['useremail'];
    }
    if($name && $email){
        echo "name: $name <br>";
        echo "email: $email";
    }
    else{
        header('location:signi.php?error=please');
    }
}
else{ //get method i.e url bata access gareyrw enter garnw khojyo vaney;
    #echo "not submitted"  ;
    header('Location: signi.php?error=please enter your information');
             //to redirect we use hEADEr('Location')           
}
?>