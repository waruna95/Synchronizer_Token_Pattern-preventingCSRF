<!DOCTYPE HTML>
<html>
<head>
<script>
function getToken(method,url,htmltag)
{
 var xhr = new XMLHttpRequest();
 xhr.onreadystatechange = function ()
		{
		if (xhr.readyState == 4 && xhr.status == 200)
		 {
		 console.log("CSRF Token Successfully Received "+this.responseText);
		 document.getElementById(htmltag).value = xhr.responseText;
		 }
		};
	xhr.open(method,url,true);
	xhr.send();
};

</script>
</head>



<title>
Login
</title>

<body>
	<form method="post" action="serverside.php">
		Username:<br/>
		<input type="text" name="username"><br/>
		Password:<br/>
		<input type="password" name="password"><br/><br/>

		<input type="hidden" id="CSRF" name="csrfToken" value="<?php echo $_SESSION['CSRF_TOKEN'];?>">

		<input type="submit" name="submit" value="Login"/> 
		
	</form>
<br/><br/>

<p> Page Views: <?php echo $_SESSION['views']; ?></p>

</body>
</html>