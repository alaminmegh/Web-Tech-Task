<?php
	$menu=$_POST['menu'];
	$item=$_POST['item'];
	$price=$_POST['price'];
	
	$filename="menu.xml";
	
	$xml = new XMLWriter();
    $xml->openMemory();
  
    $xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('Info');
    
      $xml->startElement("Food");
	  $xml->writeElement("menu",$menu);
	  $xml->writeElement("item",$item);
	  $xml->writeElement("price",$price);
      $xml->endElement();
	  
    $xml->endElement();
    $xml->endDocument();
	
	$file = $xml->outputMemory();
    file_put_contents($filename,$file,FILE_APPEND);
?>

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
			
			input[type=submit]{
				margin-left: 53px;
				font-size: 16px;
				cursor: pointer;
			}
			
			
			
			
		</style>
	</head>
	<body>
		<div id="container">
			<div id="form">
				<form method="post" action="read.php">
					<h3><?php echo "Successful!"; ?></h3>
					<input type="submit" name="" value="Read" />
				</form>
				<form method="post" action="form.php">
					<input type="submit" name="" value="Back" />
				</form>
			</div>
		</div>
	</body>
</html>