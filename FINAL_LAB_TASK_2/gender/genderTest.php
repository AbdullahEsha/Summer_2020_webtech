<?php

if(isset($_POST['submit']))
{
	if(empty($_POST['gender']))
	{
		echo "Invalid!";
	}
	else
	echo $_POST['gender'];
}

?>