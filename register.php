<!DOCTYPE html>

<html>
<head>
  <title>Simple Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    

    <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
    <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td colspan="2">
    		<div align="center">
    		  <?php 
    		
    		if (!isset($_GET['remarks'])==null and isset($_GET['remarks'])=="")
    		{
    		echo 'Register Here';
    		}
    		if (isset($_GET['remarks'])=='success')
    		{
    		echo 'Registration Success';
        echo '<button name="login" class="login"><a href="http://localhost/php/index.php">LOGIN HERE</a></button>';
    		}
    		?>	
    	    </div></td>
      </tr>
      <tr>
        <td width="95"><div align="right">First Name:</div></td>
        <td width="171"><input type="text" name="fname" /></td>
      </tr>
      <tr>
        <td><div align="right">Last Name:</div></td>
        <td><input type="text" name="lname" /></td>
      </tr>
      <tr>
        <td><div align="right">Gender:</div></td>
        <td><input type="text" name="mname" /></td>
      </tr>
      <tr>
        <td><div align="right">Address:</div></td>
        <td><input type="text" name="address" /></td>
      </tr>
      <tr>
        <td><div align="right">Contact No.:</div></td>
        <td><input type="text" name="contact" /></td>
      </tr>
      <tr>
        <td><div align="right">Picture:</div></td>
        <td><input type="text" name="pic" /></td>
      </tr>
     <tr>
        <td><div align="right">Username:</div></td>
        <td><input type="text" name="username" /></td>
      </tr>
     <tr>
        <td><div align="right">Password:</div></td>
        <td><input type="text" name="password" /></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" /></td>
      </tr>
    </table>
    </form>

<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="script.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>