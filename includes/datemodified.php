<?php
	$file = $_SERVER["SCRIPT_NAME"];
	$break = Explode('/', $file);
	$pfile = $break[count($break) - 1];
	//echo $pfile;
	echo "Date last modified&#58; " .date("d F Y g:ia",filemtime($pfile));
?>