<?php

	$q = $_REQUEST["q"];

	$urlContents = file_get_contents($q);
			
	$dom = new DOMDocument();
	@$dom->loadHTML($urlContents);
	
	$title = $dom->getElementsByTagName('title');
	
	print($title->item(0)->nodeValue . "\n"); 

?>