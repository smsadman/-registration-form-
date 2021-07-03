

<?php
   

	
	$name ="";
   $discount = "";
   $err_name = "";
   $err_discount = "";
   
   
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	//if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$err_name="*name can not be empty";
		}
		
		
		else{
			$name=$_POST["name"];
		}
		
		if(empty($_POST["discount"])){
			$err_discount="*Discunt can not empty";
		}
		else{
			$discount=$_POST["discount"];
		}
		

	}
		
?>





<html>
<head>
<center> <h1> Online Bus Managment System </h1> </center>
<title> add discount </title>
</head>
<body>
<form action="add_packase.php" method="post">
   <fieldset>
			<legend><h1> Add Discount : </h1></legend>
			<table>
			    <tr>
					<td><span > Discunt Name</span></td>
					<td>:<input type="text" name="name" value="<?php echo $name;?>">
						<span style="color:red"><?php echo $err_name;?></span></td>
						
				</tr>
			 <tr>
					<td><span > Discunt</span></td>
					<td>:<input type="text" name="dicount" value="<?php echo $discount;?>">
						<span style="color:red"><?php echo $err_discount;?></span></td>
				</tr>
			 
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				
			</table>
			
			</table>
			<table style="width: 80%" border="1">
                <tr>
                          <th>Sl#</th>
                          <th> Packase name </th>
	                      <th>Disucnt </th>
	                    

	           </tr>
		
	           <tr>

	                   <td><?php echo $row['D_namename']; ?></td>
	                   <td><?php echo $row['D_discunt']; ?></td>
	                 
	           

               </tr>
			   </table>
			<fieldset>
			
			
			<p>Click here to <a href="home-page.php">Home</a></p>
	        <p>Click here to <a href="logout.php">Logout</a></p>

		
			
</form>
</body>
</html>

