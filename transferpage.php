<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="bank.png">
	<link rel="stylesheet" href="style.css">
	<title>TransferPage</title>
</head>
<body>
<?php include 'nav.php';  ?>
<datalist id="name">
    		<?php 
    		include 'connection.php';
    		$sql = "select name from bank_rec";
			$result = mysqli_query($con, $sql); 
    		while($row = mysqli_fetch_array($result)) 
    		{ ?>
        	<option value="<?php echo $row['name']; ?>">
        	<?php echo $row['name']; ?>		       	
        	</option>
    		<?php }
    			mysqli_close($con);
    		 ?>
	</datalist>
	<main class="box">
		<h2>Transfer Page</h2>
		<table border="1px" cellpadding="5px" cellspacing="0px" align="center">
			<form action="statement.php" method="post">	
			<tr>
				<th>Transfer From</th>
				<th>Transfer Too</th>
				<th>Amount</th>
				<th>Transfer</th>
			</tr>
			<tr>
				<td><input type="text" list="name" autocomplete="off" name="from" required> </td>
				<td>
				 <input type="text" list="name" autocomplete="off" name="to" required>
				</td>
				<td>
					<input type="number" name="amt" required>
				</td>
				<td>
					<input type="submit" name="sub" value="Transfer">
				</td>
			</tr>
</form>
</table>
</main>
<footer>
		<p>&copy; 2023 Bank System</p>
		<p>Contact me at <a href="mailto:jvignesh609@gmail.com" target="_blank">info</a></p>
		<p>Find me on <a href="https://github.com/vignesh-jothi" target="_blank">GitHub</a></p>
</footer>
</body>
</html>
