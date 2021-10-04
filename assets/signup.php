<?php  include('user.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

		if (count(array($record)) == 1 ) {
			$n = mysqli_fetch_array($record);
			$firstname = $n['firstname'];
			$lastname = $n['lastname'];
      $mobileno = $n['mobileno'];
			$email = $n['email'];

		}
	}
?>

<!DOCTYPE html>
<html>
<style>
    
body {font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;}
* {box-sizing: border-box}

 input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
} 

hr{
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.container {
  padding: 16px;
  max-width: 450px;
  box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0, 0.3);
  margin: 8% auto 0;
  text-align: center;
  top: 50%;
  left: 50%;
}

.input-box{
    padding: 10px;
    margin: 10px 0;
    width: 100%;
    border: 1px solid #999;
}

[type="button"]:not(:disabled) {
        cursor: pointer;
    }

.btn-dark {
    color: #fff;
    background-color: #212529;
    border-color: #212529;
}

.btn{
    color: #fff;
    background-color: #212529;
    border-color: #212529;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    border-radius: .25rem;
    transition-property: color, background-color, border-color, box-shadow;
    transition-duration: 0.15s, 0.15s, 0.15s, 0.15s;
    transition-timing-function: ease-in-out, ease-in-out, ease-in-out, ease-in-out;
    transition-delay: 0s, 0s, 0s, 0s;
}

[type="button"], [type="reset"], [type="submit"], button {
    -webkit-appearance: button;
}
</style>

<body>

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

<table>
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
      <th>Mobile Number</th>
      <th>Email</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['firstname']; ?></td>
			<td><?php echo $row['lastname']; ?></td>
      <td><?php echo $row['mobileno']; ?></td>
      <td><?php echo $row['email']; ?></td>
			<td>
				<a href="signup.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="user.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

<form style="border:1px solid #fff" method = "POST" action = "user.php">
  <div class="container">
    <h1>Sign Up</h1>
    <hr>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" class="input-box" placeholder="First name" name="firstname" required value="<?php echo $firstname; ?>">
    <input type="text" class="input-box" placeholder="Last name" name="lastname" required value="<?php echo $lastname; ?>">
    <input type="text" class="input-box" placeholder="Mobile number" name="mobileno" >
    <input type="text" class="input-box" placeholder="Enter Email" name="email" >
    <input type="password" class="input-box" placeholder="Enter Password" name="psw">
    
    <p>By creating an account you agree to our <a href="#" style="color:black">Terms & Privacy</a>.</p>
    
    <?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>  

<hr>
    
    <p>Already have an account? </p><a href = "../assets/login.php"><button type="button" class="btn btn-dark">Login</button></a>

  </div>
</form>

</body>
</html>
