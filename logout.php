<?php
	session_start();
		if(isset($_SESSION['authUser'])){
  			unset($_SESSION['authUser']);
  			unset($_SESSION['authRole']);
			session_destroy();
		}
	header('Location:http://bellkenz.com/smpp_qa/');
?> 
