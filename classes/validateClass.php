<!--
IT15060822
W.M.W.G.Wijesundara
-->
<?php
if(isset($_POST['uname'],$_POST['psw'])){
	$uname = $_POST['uname'];
	$pwd = $_POST['psw'];
	if($uname == 'user' && $pwd == 'user123'){
        ob_start();
        echo 'Successfully logged in';
        session_start();
        $_SESSION['USERNAME'] = $uname;
        $_SESSION['LOG'] = "in";
        header("location: ../views/home.php");
	}
	else{
		header("location: ../index.php?er= Invalid Username and Password");
	}
}
?>