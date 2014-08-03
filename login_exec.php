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

      //Create query

      $qry = "SELECT * FROM member WHERE username='$username' AND password='$password' ";
      $result = mysql_query($qry);

      //Check wether the query successful or not

      if($result){

      		if(mysql_num_rows($result) > 0){
      			//Login successful
      			session_regenerate_id();
      			$member = mysql_fetch_assoc($result);
      			$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
      			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
      			$_SESSION['SESS_LAST_NAME'] = $member['password'];
      			session_write_close();
      			header("location:home.php");
      			exit();
      		}
      		else{
      			//Login failed
      			$errmsg_arr[] = 'username and password not found';
      			$errflag = true;
      			if ($errflag) {
      				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
      				session_write_close();
      				header('location:index.php');
      				exit();
      			}
      		}

      }
      else{
      	die("Query failed");
      }

?>
