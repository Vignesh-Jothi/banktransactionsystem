<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Histroy</title>
	<link rel="icon" href="bank.png">
	<link rel="stylesheet" href="style.css">
	<style>
		th{
			background-color: lightskyblue;
		}
		ul{
			display: flex;
			justify-content: end;
			list-style: none;
		}
		li a{
			padding-left: 10px;
		}
		a{
			text-decoration: none;
			font-size: 20px;
			font-weight: bold;
			color: black;
		}
		li a:hover{
			transition: 0.5s;
			color: skyblue;
		}
	</style>
</head>
<body>
	<?php include 'nav.php'; ?>
	<div class="box">
	<h2>History of the payment</h2>
<table align="center" cellpadding="5px" cellspacing="0px" border="1px">
	<tr>
		<th>From</th>
		<th>To</th>
		<th>Amount</th>
		<th>Result</th>
		<th>Date of the payment</th>
		<th>Time of the payment</th>	
	</tr>

<?php 
	include 'connection.php';	
	if(isset($con)){
		#$qry = "select * from statement order by ctime desc";
		$qry = "SELECT * FROM statement ORDER BY DATE(paydate) DESC, TIME(ctime) DESC";
		$res = mysqli_query($con,$qry);
		if(isset($res))
		{
			while ($row = mysqli_fetch_array($res))
			{
				echo "<tr>
					<td>".$row[0]."</td>
					<td>".$row[1]."</td>
					<td>".$row[2]."</td>
					<td>".$row[3]."</td>
					<td>".$row[4]."</td>
					<td>".$row[5]."</td>
					</tr>";
			}
		}
	}
	mysqli_close($con);
 ?>
</table>
</div>
<footer>
		<p>&copy; 2023 Bank System</p>
		<p>Contact me at <a href="mailto:jvignesh609@gmail.com" target="_blank">info</a></p>
		<p>Find me on <a href="https://github.com/vignesh-jothi" target="_blank">GitHub</a></p>
</footer>
 </body>
</html>