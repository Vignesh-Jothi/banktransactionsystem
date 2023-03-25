<?php
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
	<?php include 'nav.php';  ?>
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
				for ($i=1; $i<=9 ; $i++) { 
					echo "<tr><td>";
					if(isset($con)){
					$select_name_qry = "select name from bank_rec where acc_num = 3200150$i";
					$select_res = mysqli_query($con,$select_name_qry);
					while ($row = mysqli_fetch_array($select_res)) {
						echo $row['name'];
					}
				}
				 echo "</td><td>3200150$i</td><td>";
				if(isset($con)){
					$select_mail_qry = "select email from bank_rec where acc_num = 3200150$i";
					$select_res = mysqli_query($con,$select_mail_qry);
					while ($row = mysqli_fetch_array($select_res)) {
						echo $row['email'];
					}
				}
				echo '</td><td>';
				if(isset($con)){
					$select_balance_qry = "select bal from bank_rec where acc_num = 3200150$i";
					$select_res = mysqli_query($con,$select_balance_qry);
					while ($row = mysqli_fetch_array($select_res)) {
						echo $row['bal'];
					}
				}
				echo '</td></tr>';
				}
				$qry = "select * from bank_rec";
				$res_s = mysqli_query($con,$qry);
				for ($i=10; $i<=mysqli_num_rows($res_s) ; $i++) { 
					echo "<tr><td>";
					if(isset($con)){
					$qry = "select name from bank_rec where acc_num = 320015$i";
					$res = mysqli_query($con,$qry);
					while ($row = mysqli_fetch_array($res)) {
						echo $row['name'];
					}
				}
				 echo "</td><td>320015$i</td><td>";
				if(isset($con)){
					$qry = "select email from bank_rec where acc_num = 320015$i";
					$res = mysqli_query($con,$qry);
					while ($row = mysqli_fetch_array($res)) {
						echo $row['email'];
					}
				}
				echo '</td><td>';
				if(isset($con)){
					$qry = "select bal from bank_rec where acc_num = 320015$i";
					$res = mysqli_query($con,$qry);
					while ($row = mysqli_fetch_array($res)) {
						echo $row['bal'];
					}
				}
				echo '</td></tr>';
				}
			mysqli_close($con);
			 ?>
			</form>
		</table>
	</div>
	<br>
</body>
</html>