<?php

	$content = 'dashboard';

	if(isset($_GET['page']))
	{
		$content = $_GET['page'];
	}

	include 'view/'.$content.'.php';

?>