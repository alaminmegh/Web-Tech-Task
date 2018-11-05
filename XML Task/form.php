<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title></title>
		<style>
			body{
				margin: 0px;
				padding: 0px;
			}
			#container{
				width: 70%;
				margin: 0px auto;
				background-color: #26734d;
				
			}
			#form{
				width: 30%;
				margin: 0px auto;
				background-color: #ddd;
				color: #000;
				padding: 10px;
				height: 300px;
				font-size: 18px;
				
			}
			form{
				padding-top: 20px;
			}
			input{
				margin-top: 10px;
			}
			input[type=submit]{
				margin-left: 53px;
				font-size: 16px;
				cursor: pointer;
			}
			input[type=number]{
				margin-left: 6px;
			}
			#item{
				margin-left: 10px;
			}
			
			
		</style>
	</head>
	<body>
		<div id="container">
			<div id="form">
				<form method="post" action="write.php">
					Menu: <input type="text" name="menu" value="" /><br/>
					Item: <input  id="item" type="text" name="item" value="" /><br/>
					Price: <input type="number" name="price" value="" /><br/>
							<input type="submit" name="" value="submit" />
				</form>
			</div>
		</div>
	</body>
</html>