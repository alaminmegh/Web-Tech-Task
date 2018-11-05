<?php
	$con=mysqli_connect("localhost","root","","tour");
	$query="select * from tour";

	$rs=mysqli_query($con,$query);
	$xml = new XMLWriter();
    $xml->openMemory();
	$xml->setIndent(true);
	foreach($rs as $row){
		$xml->new DOMDocument('1.0', 'UTF-8');
		$xml->load("info.xml");
		//$xml->startElement('Info');
		
		  //$xml->startElement("Food");
		  $id=$xml->createElement("id",$menu);
		  $cid=$xml->createElement("countryId",$row['id']);
		  $title=$xml->createElement("title",$row['title']);
		  $des=$xml->createElement("description",$row['country_id']);
		  //$xml->endElement();
		  $data->appendchild($id);
		  $data->appendchild($cid);
		  $data->appendchild($title);
		  $data->appendchild($des);
		  $xml->documentElement->appendchild($data);
		  $xml->save("info.xml");
		  
		//$xml->endElement();
		//$xml->endDocument();
		
		//$file = $xml->outputMemory();
		//file_put_contents($filename,$file,FILE_APPEND);
		
	}
?>







