<html>
<head>
	<title>Transfer</title>
	<link rel="icon" href="bank.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'nav.php';  ?>
<h2>Statement Page</h2>
<?php
#include 'connection.php';
require_once 'connection.php';
if(function_exists('date_default_timezone_set'))
{
    date_default_timezone_set("Asia/Kolkata");
}
if(isset($con))
{
	if(isset($_POST['sub']))
	{
		$acc_num = $_POST['from'];
		$amt = $_POST['amt'];
   		$name=$_POST['to']; 
   		$cd = date('Y/m/d');
   		$ct = date("h:i:sa");
		$qrychk="select bal from bank_rec where name ='$acc_num';";
		$chkres=mysqli_query($con,$qrychk);
		$row = mysqli_fetch_array($chkres);
		$chkamt=$row[0];
		
		if($amt<=$chkamt){
			$update_qry = "update bank_rec set bal = bal + $amt where name = '$name';";
			$update_res = mysqli_query($con,$update_qry);
			if(isset($update_res))
			{
					echo "<b><br> Transfer Completed!!<br>Amount : $amt <br> From $acc_num to $name</b>";
					$update_qry_withdraw = "update bank_rec set bal = bal - $amt where name = '$acc_num';";
					$update_qry_withdraw_res = mysqli_query($con,$update_qry_withdraw);
					if(isset($update_qry_withdraw_res)){
						$res_pay = "Transaction Sucessfully Completed.";
					}
					else{
						$res_pay = "Transaction Not Completed.";
					}
			}
				$select_qry = "select bal from bank_rec where name = '$name'";
				$fetch_res = mysqli_query($con,$select_qry);
				while ($row = mysqli_fetch_array($fetch_res)) 
				{
					echo "<br><b>Balance Of The $name is :</b>".$row[0];
				}
				$update_select_qry = "select bal from bank_rec where name = '$acc_num'";
				$update_res = mysqli_query($con,$update_select_qry);
				while ($row = mysqli_fetch_array($update_res)) 
				{
					echo "<br><b>Balance Of The $acc_num is :</b>".$row[0];
				}
				if(isset($con))
				{
				$insert_qry = "insert into statement values('$acc_num','$name',$amt,'$res_pay','$cd','$ct')";
				$insert_res = mysqli_query($con,$insert_qry);
				}
				
		}else{
			echo "<script>
				alert('insufficient privileges');
				</script>";
			echo "<h2>It may occur insufficient amount of money or same user try to transfer money.</h2>";
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
<footer>
		<p>&copy; 2023 Bank System</p>
		<p>Contact me at <a href="mailto:jvignesh609@gmail.com" target="_blank">info</a></p>
		<p>Find me on <a href="https://github.com/vignesh-jothi" target="_blank">GitHub</a></p>
</footer>
</body>
</html>