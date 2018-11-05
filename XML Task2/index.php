<html>
	<head>
		<style>
			body{
				margin: 0px;
				padding: 0px;
			}
			#m{
				background-color: #00b3b3;
				margin: 5px 5px;
				padding: 6px 7px;
			}
			._click{
				padding: 5px 8px;
				width: 70px;
				font-size: 18px;
				color: #fff;
				background-color: #2d8659;
				cursor: pointer;
				margin-top: 10px;
				margin-left: 10px;
				border: none;
			}
		</style>
	</head>
	<body>
	<div id="btn">
		<form method="post" action="xml.php">
			<input class="_click" type="submit" name="" value="XML" />
		</form>
	</div>
	<?php
		$con=mysqli_connect("localhost","root","","tour");
		$query="select * from tour";

		$rs=mysqli_query($con,$query);

		foreach($rs as $row){
		echo "<div id='m'>";
		echo "<h4 >Tour ID:".$row['id']." <br/>Tour Country ID:".$row['country_id']."</h4><hr>";
		echo "<h2>".$row['title']."</h2>";
		echo "<p>".$row['description']."</p>";
		echo "</div>";
	}
    ?>
	</body>
</html>
