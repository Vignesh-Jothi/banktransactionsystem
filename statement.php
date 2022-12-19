<html>
<head>
	<title>Transfer</title>
	<link rel="icon" href="bank.png">
</head>
<body>
<?php include 'nav.php';  ?>
<h2>Statement Page</h2>
<?php
include 'connection.php';
if(isset($con))
{
	if(isset($_POST['sub']))
	{
		$acc = $_POST['from'];
		$amt = $_POST['amt'];
   		$name=$_POST['to']; 
   		$cd = date('Y/m/d');
   		$ct = date("h:i:sa");
		$qry1 = "update bank_rec set bal = bal + $amt where name = '$name';";
		$res1 = mysqli_query($con,$qry1);
		if(isset($res1))
		{
			echo "<b><br> Transfer Completed!!<br>Amount : $amt <br> From $acc to $name</b>";
			$qry2 = "update bank_rec set bal = bal - $amt where name = '$acc';";
			$res2 = mysqli_query($con,$qry2);
			if(isset($res2)){
				$res_pay = "Transaction Sucessfully Completed.";
			}
			else{
				$res_pay = "Transaction Not Completed.";
			}
		}
		$qry3 = "select bal from bank_rec where name = '$name'";
		$res3 = mysqli_query($con,$qry3);
		while ($row = mysqli_fetch_array($res3)) 
		{
			echo "<br><b>Balance Of The $name is :</b>".$row[0];
		}
		$qry3 = "select bal from bank_rec where name = '$acc'";
		$res3 = mysqli_query($con,$qry3);
		while ($row = mysqli_fetch_array($res3)) 
		{
			echo "<br><b>Balance Of The $acc is :</b>".$row[0];
		}
		if(isset($con))
		{
		$qry = "insert into statement values('$acc','$name',$amt,'$res_pay','$cd','$ct')";
		$res = mysqli_query($con,$qry);
		}

	}
	else{
		echo "It shows information about Transaction.<br>";
		echo "Kindly, Make sure you have done the transaction.<br> Thank you!";
	}

}
	else
		echo "Database Not connected";
			
	mysqli_close($con);
?> 
</table>
</body>
</html>