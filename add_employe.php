

<?php
   
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$gmail="";
	$err_gmail="";
	$phone="";
	$err_phone="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	//if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$err_name="*name Required";
		}
		elseif(strlen($_POST["name"]) < 6){
			$err_name="name Must be 6 Characters Long";
		}
		
		else{
			$name=$_POST["name"];
		}
		
		if(empty($_POST["uname"])){
			$err_uname="*username Required";
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="*password Required";
		}else{
			$pass=$_POST["pass"];
		}
		if(empty($_POST["gmail"])){
			$err_gmail="*gmail Required";
		}
		elseif(strlen($_POST["gmail"]) < 6){
			$err_gmail="gmail Must be 6 Characters Long";
		}
		else{
			$gmail=$_POST["gmail"];
		}
       if(empty($_POST["phone"])){
			$err_phone="*phone number Required";
		}
		else{ 
			$phone=$_POST["phone"];
		}


	}
		
?>





<html>
<head>
<center> <h1> Online Bus Managment System </h1> </center>
<title> add employe </title>
</head>
<body>
<form action="add_employe.php" method="post">
   <fieldset>
			<legend><h1> ADD Employee: </h1></legend>
			<table>
			    <tr>
					<td><span > Full Name</span></td>
					<td>:<input type="text" name="name" value="<?php echo $name;?>">
						<span style="color:red"><?php echo $err_name;?></span></td>
						
				</tr>
			 <tr>
					<td><span >User name</span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>">
						<span style="color:red"><?php echo $err_uname;?></span></td>
				</tr>
			 <tr>
					<td><span >Password </span></td>
					<td>:<input type="text" name="pass" value="<?php echo $pass;?>">
						<span style="color:red"><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span >Gmail</span></td>
					<td>:<input type="text" name="gmail" value="<?php echo $gmail;?>">
						<span style="color:red"><?php echo $err_gmail;?></span></td>
				</tr>
				<tr>
					<td><span >Phone</span></td>
					<td>:<input type="text" name="phone" value="<?php echo $phone;?>">
						<span style="color:red"><?php echo $err_phone;?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				
			</table>
			</table>
			<table style="width: 80%" border="1">
                <tr>
                          <th>Sl#</th>
                          <th> Full Name</th>
	                      <th>Username</th>
	                      <th>Password</th>
	                      <th>Gmail</th>
	                      <th>Phone</th>

	           </tr>
		
	           <tr>

	                   <td><?php echo $row['name']; ?></td>
	                   <td><?php echo $row['uname']; ?></td>
	                    <td><?php echo $row['pass']; ?></td>
	                    <td><?php echo $row['gmail']; ?></td>
	                   <td><?php echo $row['phone']; ?></td>
	           

               </tr>
			   </table>
			<fieldset>
			</body>
			
			<p>Click here to <a href="home-page.php">Home</a></p>
	        <p>Click here to <a href="logout.php">Logout</a></p>

		
			
</form>

