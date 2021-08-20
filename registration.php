
<?php
    include "store/menu.php"; 
    
	require('config.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($link,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($link,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($link,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, permission, trn_date) VALUES ('$username', '".md5($password)."', '$email', 'usuario', '$trn_date')";
        $result = mysqli_query($link,$query);
        if($result){
            echo "<br><br><div class='center'><h3>Se ha registrado satisfactoriamente!!!</h3><br/> <h2><a href='login.php'>INICIA SESION</a></h2> </div>";
        }
    }else{
?>
<br><br>
<style type="text/css">
         .col-centrada{ float: none; margin: 0 auto;  text-align: center;}
</style>
<div class="col-4"></div>
<div class="col-md-4 col-centrada">
<h4>INGRESAR</h4>

    <form name="registration" action="" method="post">
        <input type="text" name="username" placeholder="Username" class="form-control" required /><br/>
        <input type="text" name="email" placeholder="Email" class="form-control" required /><br/>
        <input type="password" name="password" placeholder="Password" class="form-control" required /><br>
        <input type="submit" name="submit" value="Registrar" class="btn btn-sm btn-info" /><br>
    </form>
</div>
<div class="col-4"></div>
<?php 
include "store/footer.php"; }
?>

