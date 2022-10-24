<?php 
  session_start();
 $name= $_POST["name"];
  echo $name;
 $email= $_POST["email"];
  echo $email;
 $password= $_POST["password"];
  echo $password;

  $flag = true;

$uppercase = preg_match('@[A-Z]@',$password);
$lowercase = preg_match('@[a-z]@',$password);
$number = preg_match('@[0-9]@',$password);
$special = preg_match('@[#,$,*,+]@',$password);

?>

<?php


if(empty($name)){

    $_SESSION['nam_err']="Enter your name";
 

    $flag = false;
}

if(empty($email)){
    $_SESSION['eml_err']="Enter your email";
  
    $flag = false;
}else{
    $_SESSION['eml_err']="Enter valid email";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL));
}

if(empty($password)){
    $_SESSION['pass_err']="Enter your password";
    
    $flag = false;
}else{
    if(!$uppercase ||!$lowercase ||!$number ||!$special|| strlen($password<4) ){
        $_SESSION['pass_err']="Enter your 
        uppercase lowercase,number,special number. min-8";
        $flag = false;
    }
}


if($flag){
    echo $name;
    echo $email;
    echo $password;

}else{
    $_SESSION['nam_val']=$name;
    $_SESSION['eml_val']=$email;
   
  
    header('location:register.php');
}





?>