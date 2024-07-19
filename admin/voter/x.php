<?php
	$x = "I love you helinaye";
	$y = base64_encode($x);
	$z = base64_decode($y);
	echo $y;
?>