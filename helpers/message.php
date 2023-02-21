<?php 

// redirenct to page

function redirect($page = FALSE, $message = NULL, $message_type = NULL){
	if (is_string($page)) {
		$location = $page;
	}else {
		$location = $_SERVER['SCRIPT_NAME'];
	}

	//check for message
	if ($message != NULL) {
		$_SESSION['message'] = $message;
	}

	// check for type
	if ($message_type != NULL) {
		// set message type
		$_SESSION['message_type'] = $message_type;
	}

	header('Location: '.$location);
	exit;
}


// display message
function displayMessage(){
	if (!empty($_SESSION['message'])) {
		
		// assign message var
		$message = $_SESSION['message'];

		if (!empty($_SESSION['message_type'])) {
			
			// assign type var
			$message_type = $_SESSION['message_type'];
			// creat putput
			if ($message_type == 'error') {
				echo "<script type='text/javascript'>
					     Swal.fire({
					    title:  '$message',
					    // text: 'You clicked the button!',
					    icon: '$message_type',
					    button: 'Okay',
					    timer: 3000,
					  });
					   </script>";
			}else {
				echo "<script type='text/javascript'>
					     Swal.fire({
					    title:  '$message',
					    // text: 'You clicked the button!',
					    icon: '$message_type',
					    button: 'Okay',
					    timer: 3000,
					  });
					   </script>";
			}
		}

		unset($_SESSION['message']);
		unset($_SESSION['message_type']);
	}else {
		echo '';
	}
}