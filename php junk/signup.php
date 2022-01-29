<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors=array();
    $name=$_POST['username'];   
    $email=$_POST['useremail'];  
    $password=$_POST['password'];
    if(empty($name)){
        $errors['username']="username cannot be empty";
    }
    elseif(!preg_match('/^[A-Za-z]+(\s[A-Za-z]+)?\s[A-Za-z]+$/',$name)){
        $errors['username']="invalid user name";
    }
    if(empty($email)){
        $errors['email']="empty email";
    }
    //elseif(!preg_match('/^[A-Za-z]+[0-9]{2,4}[A-Za-z][a-z]{2,3} $/',$email)){
      //  $errors['email']="invalid email format";
    //}
    if(empty($password)){
        $errors['password']="password required";
    }
   // elseif(!preg_match('/[0-9]{2,5}[A-Za-z]+/',$email))
//{
  //  $errors['password']="invalid password";
//}
   
    if(count($errors)==0){
        echo $name. $email;
        
    }else{
        header('location:form.php?errors='.serialize($errors));
    }
}
else{
    header('location:form.php?error=please enter your information');
}

?>