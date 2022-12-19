<html>
<head>
	<style>
		.head{
			font-size: 20px;
			padding-right: 50%;
			padding-left:5px ;
		}
		h2{
			display: flex;
			justify-content: center;
			width: 100%;
		}
		table{
			width: 50vw;
			font-size: 1em;		
		}
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
		button{
			padding: 10px 15px;
			margin-left: 70%;
			background-color:transparent ;
			border-radius: 	20px 20px;
		}
		button:hover{
			transition: 0.5s;
			background-color: lightskyblue;
		}

</style>
</head>
<body>
<nav >
<ul >
			<li class="head">The Easy Bank</li>
			<li><a href="index.php">Home</a></li>
			<li><a href="transferpage.php">Transfer</a></li>	
			<li><a href="statement.php">Statement</a></li>
			<li><a href="histroy.php">Payment Histroy</a></li>
</ul>
</nav>
<hr/>
	<?php
	 #this block only for Linguist to understand that it is not a Hack file.
	?>
</body>
</html>
