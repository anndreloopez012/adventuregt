
<?php
    include "store/menu.php"; 
  
	require('config.php');
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($link,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($link,$password);
		
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($link,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			while ( $rTMP = mysqli_fetch_assoc($result) ){
                $_SESSION['logged'] = true;
                $_SESSION['username'] = $username;

            }

			header("Location: store.php"); 
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<br><br><br>
<div class="form col-md-4 col-centrada">
<h4>INGRESAR</h4>
    <form action="" method="post" name="login">
        <input type="text" name="username" placeholder="Username" class="form-control"  required /><br/>
        <input type="password" name="password" placeholder="Password" class="form-control"  required /><br/>
        <input name="submit" type="submit" value="INGRESAR" class="btn btn-sm btn-info" />
    </form>

</div>
<?php 
include "footer.php"; }
?>
<style type="text/css">
         .col-centrada{ float: none; margin: 0 auto;  text-align: center;}
</style>