<?php

	if(isset($_POST['url']))
	{
		include 'models/post_vid.php';
	}
	else
	{
		$view='views/form_vid.php';
	}

	include $view;

?>