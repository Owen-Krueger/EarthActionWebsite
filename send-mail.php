<?php

    $to = "earthaction@css.edu";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	mail($to, "Request to join Email List", $name, "From: $email" );
    }
?>