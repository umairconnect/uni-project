<!DOCTYPE html>
<html>
	<head>
		<title>LOGIN IN THE SYSTEM </title>
		<meta name="Author" content="Hassan_Rami" />
		<script type="text/javascript">
			
			
		</script>
	</head>
	<!--if
	this is commment
	-->
	<body>
	<br/>
	<br/>
	  <center><h1>If you Admin Plese Enter Id And Password </h1></center>
		
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<div class = "col-sm-4">
	<center>
	<table border=20 class="btn-secondary display-5 font-weight-bold">
<form name ="Student" method = "GET"   action="verificationlogin.php">
<tr><td>ID :</td><td><input type="text" name = "id"  id="iTutor"
style="width: 200px; text-align:right; color:black;" value = ""></td></tr>

<tr><td>Password:</td><td><input type="password" name = "password"  id="icoursecode"
style="width: 20; text-align:right; color:black;" value = ""></td></tr>

<tr><td></td><td><input type="submit" style="width: 20; text-align:right; color:black;" value = "LOGIN" />


</form>
</table>

</center>
<br/>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<center><h2>If you Not User Click Here And Send Request to Admin </h2>
<form name ="Student" method = "GET"   action="success.php">
<input type="submit" style="width: 200px; font-size : 20px; height: 50px; text-align:center; color:red;" value = "View List item" />
</form>


</center>


</body>
			
	
</html>
