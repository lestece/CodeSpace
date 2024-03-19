<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Registration form</title>
</head>
<body>
    
<form class='container' action="registration-form.php" method="post" enctype="multipart/form-data">
<h1>Create Account</h1>
<div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" name='first_name' placeholder="First Name" required value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?> ">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="last_name" name='last_name' placeholder="Last Name" required value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?> ">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name='email' placeholder="email@example.com" required value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?> ">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Create New Password</label>
    <input type="password" class="form-control" id="password" name='password' placeholder="Create New Password" required value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?> ">
    <label for="password-confirm">Confirm Password</label>
    <input type="password" class="form-control" id="password-confirm" name='password-confirm' placeholder="Confirm Password">
  </div>
  <p>By creating an account you agree to our <a href="">Terms & Privacy</a>.</p>
  <button type="submit" class="btn btn-primary">Create Account Now</button>
</form>
<?php 
	if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
	{
	  # Connect to the database.
	  require ('connect_db.php'); 

  # Initialize an error array.
  $errors = array();

  # Check for first name .
  if ( empty( $_POST[ 'first_name' ] ) )
  { $errors[] = 'Enter your first name.' ; }
  else
  { $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; }

  # Check for last name .
  if ( empty( $_POST[ 'last_name' ] ) )
  { $errors[] = 'Enter your last name.' ; }
  else
  { $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; }
  # Check for email.
  if (empty( $_POST[ 'email' ] ) )
  { $errors[] = 'Enter your email.' ; }
  else
  { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }
  
  # Check for password
  if (empty( $_POST[ 'password' ] ) )
  { $errors[] = 'Enter password.' ; }
  else
  { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'password' ] ) ) ; }

  # get current date
  $d = date('Y-m-d H:i:s');
  
   # On success data into my_table on database.
  if ( empty( $errors ) ) 
  {
    $q = "INSERT INTO users (first_name, last_name, email, password, reg_date) 
	VALUES ('$fn','$ln','$e', '$p', '$d' )";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    { echo '<p>New record created successfully</p>'; }
  
    # Close database connection.
    mysqli_close($link); 

    exit();
  }
   
  # Or report errors.
  else 
  {
    echo '<p>The following error(s) occurred:</p>' ;
    foreach ( $errors as $msg )
    { echo "$msg<br>" ; }
    echo '<p>Please try again.</p></div>';
    # Close database connection.
    mysqli_close( $link );
	
  }  
}
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>