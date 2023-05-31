<?php
session_start();
if($_POST['username']){
    if(empty($_POST['username'])){
        $_SESSION['numeLogin']="Nume is required";
    }else if($_SESSION['username']==$session->get('user_name')){
        $_SESSION['numeLogin']="Username incorect";
    }else{
        $_SESSION['nume']=$_POST['nume'];
    }
    
   if(empty($_POST['password'])){
        $_SESSION['passLogin']="Nume is required";
    }else if($_SESSION['password']==$session->get('pass')){
        $_SESSION['passLogin']="Parola incorecta";
    }else{
        $_SESSION['password']=$_POST['password'];
    }
    
}
if(!empty($_SESSION['numeLogin'])||!empty($_SESSION['password']))
    header("Location:contact.php");
else header('Location:afterlogin.php');
?>

