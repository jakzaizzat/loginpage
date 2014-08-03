<?php

      //Start session

      session_start();

      //Array to store validation error
      require_once('connection.php');

      //Array to store error validation message
      $errmsg_arr = array();

      //validation error flag
      $errflag = false;

      //Function to clean values from the form . Prevent SQL injection

      function clean($str){
        $str = @trim($str);
        if(get_magic_quotes_gpc()){
          $str = stripslashes($str);
        }

        return mysql_real_escape_string($str);
      }

      //Sanitize the POST value

      $username = clean($_POST['username']);
      $password = clean($_POST['password']);

      //Input validation

      if($username = ''){
        $errmsg_arr[] = 'username missing';
        $errflag = true;
      }

      if($password = ''){
        $errmsg_arr[] = 'pssword missing';
        $errflag = true;
      }

      //If there are error input validation redirect to login page

      if($errflag){
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("location:index.php");
        exit();
      }



?>
