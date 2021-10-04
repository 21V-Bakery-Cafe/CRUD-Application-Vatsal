<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'login');

	// initialize variables
	$firstname = "";
	$lastname = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
            $mobileno = $_POST['mobileno'];
            $email = $_POST['email'];
            $psw = $_POST['psw'];


		mysqli_query($db, "INSERT INTO info (firstname, lastname, mobileno, email, psw ) VALUES ('$firstname', '$lastname', '$mobileno', '$email', '$psw')"); 
		$_SESSION['message'] = "Info Saved"; 
		header('location: signup.php');
	}

      if (isset($_POST['update'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
            $mobileno = $_POST['mobileno'];
            $email = $_POST['email'];
            $psw = $_POST['psw'];
      
            mysqli_query($db, "UPDATE info SET firstname='$firstname', lastname='$lastname', mobileno='$mobileno', email='$email' WHERE id=$id");
            $_SESSION['message'] = "Info updated!"; 
            header('location: signup.php');
      }
  
      if (isset($_GET['del'])) {
            $id = $_GET['del'];
            mysqli_query($db, "DELETE FROM info WHERE id=$id");
            $_SESSION['message'] = "Info deleted!"; 
            header('location: signup.php');
      }
  ?>