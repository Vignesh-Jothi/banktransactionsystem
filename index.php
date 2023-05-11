<?php	
	// Include the file that contains the database connection details
	include 'connection.php';		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="icon" href="bank.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		// Include the navigation menu
		include 'nav.php'; 
	 ?>
	 <!-- Create a container for the customer information table -->
	<div class="box">
		<h2>Bank System </h2>
		<h2>Customers Information</h2>
		<table border="1px" cellpadding="5px" cellspacing="0px" align="center">
			<form action="transfer.php" metdod="post">	
			<tr>
				<th>Customer Name</th>
				<th>Account Number</th>
				<th>Email</th>
				<th>Balance</th>
			</tr>
			<?php 
				if(isset($con)){
				//Loop through the first nine customers and display their information
				for ($i = 1; $i <= 9; $i++) { 
					// Retrieve the customer's name
					$select_name_qry = "SELECT name FROM bank_rec WHERE acc_num = 3200150$i";
					$select_res = mysqli_query($con, $select_name_qry);
					while ($row = mysqli_fetch_array($select_res)) {
						$name = $row['name'];
					}				

					// Retrieve the customer's email
					$select_mail_qry = "SELECT email FROM bank_rec WHERE acc_num = 3200150$i";
					$select_res = mysqli_query($con, $select_mail_qry);
					while ($row = mysqli_fetch_array($select_res)) {
						$email = $row['email'];
					}
				

					// Retrieve the customer's balance
					$select_balance_qry = "SELECT bal FROM bank_rec WHERE acc_num = 3200150$i";
					$select_res = mysqli_query($con, $select_balance_qry);
					while ($row = mysqli_fetch_array($select_res)) {
						$balance = $row['bal'];
					}

					// Display the customer's information in the table
					echo "<tr>
							<td>$name</td>
							<td>3200150$i</td>
							<td>$email</td>
							<td>$balance</td>
						  </tr>";
				}
			

				// Retrieve the total number of rows in the bank_rec table		
				$qry = "select * from bank_rec";
				$res_s = mysqli_query($con,$qry);
				// Loop through the remaining customers and display their information
				for ($i=10; $i<=mysqli_num_rows($res_s) ; $i++) { 
					// Retrieve the customer's name
					$select_name_qry = "SELECT name FROM bank_rec WHERE acc_num = 320015$i";
					$select_res = mysqli_query($con, $select_name_qry);
					while ($row = mysqli_fetch_array($select_res)) {
						$name = $row['name'];
					}
				 	
					// Retrieve the customer's email
					$select_mail_qry = "SELECT email FROM bank_rec WHERE acc_num = 320015$i";
					$select_res = mysqli_query($con, $select_mail_qry);
					while ($row = mysqli_fetch_array($select_res)) {
						$email = $row['email'];
					}
					
					// Retrieve the customer's balance
					$select_balance_qry = "SELECT bal FROM bank_rec WHERE acc_num = 320015$i";
					$select_res = mysqli_query($con, $select_balance_qry);
					while ($row = mysqli_fetch_array($select_res)) {
						$balance = $row['bal'];
					}
					
					// Display the customer's information in the table
					echo "<tr>
							<td>$name</td>
							<td>320015$i</td>
							<td>$email</td>
							<td>$balance</td>
						  </tr>";
				}
				}
				else{
					echo "We're sorry, but there was an error connecting to the database. 
						Please check your connection settings and try again later. 
						If the problem persists, please contact the website administrator for assistance.";
				}
				mysqli_close($con);
			?>
			</form>
		</table>
	</div>
	<br>
	<footer>
		<p>&copy; 2023 Bank System</p>
		<p>Contact me at <a href="mailto:jvignesh609@gmail.com" target="_blank">info</a></p>
		<p>Find me on <a href="https://github.com/vignesh-jothi" target="_blank">GitHub</a></p>
</footer>

</body>
</html>