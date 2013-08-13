<?php
    require_once("metacaptcha/metacaptcha_lib.php");
    $message = $_POST['comment'];  //content of the message
    $verify = metacaptcha_verify($_POST['metacaptchaField'],$message);
    //the CAPTCHA is correct
    if($verify){

      var_dump($_REQUEST);
      echo "<p style='color:red'>You are verified</p>";
    }
    //oops, the CAPTCHA is incorrect
    else{
        echo "<p style='color:red'>The CAPTCHA'S answer is incorrect</p>";
    }
