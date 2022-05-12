<html>
    <title>Login</title>
    <body>
        <?php
		session_start();
        $User = '$_POST[User]';
        $Password = '$_POST[Password]';
      
        
        if ($_SESSION['submit']==true || ($_POST['User']=="admin" && $_POST['Password']=="admin")) {
            echo "password accepted";
			header('location:dashboard.php');
            $_SESSION['submit']=true;
        }else {
            echo "incorrect login";
        }
		
        ?>

        <form name="input" action="dashboard.php" method="post">
		<input type="submit" name="home">
        </form>
    </body>
</html>