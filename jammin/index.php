<?php 

	$hello = "Hello World";

	$myarr = [1,2,3];

	$urarr = [4,5,6];

	

	$strsplit = substr($hello, 6, 5);

	echo "<span>Hello World</span> <br /> <span>" . $strsplit . "</span> <br />";

	print_r(array_merge($myarr, $urarr));
?>