<?php
require('src/dbconnect.php');
require('src/config.php');
	
	  
      // chckingInfo($_POST);

 

$error = '';
 if (isset($_POST['logInBtn'])) {
        $email    = $_POST['email'];
        $password = $_POST['password'];


        try {
            $query = "
                SELECT * FROM users
                WHERE email = :email;
            ";

            $stmt = $dbconnect->prepare($query);
            $stmt->bindValue(':email', $email);
            $stmt->execute(); 
            $user = $stmt->fetch();
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }

		// chckingInfo($_POST);
       
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['first_name'];
            header('Location: index.php');
            exit;

        } else {
           
            $error = '<div class="error" role="alert">
			Incorrect login information. Please try again!
			
	</div>';
        }
    }

		
           // chckingInfo($_SESSION['user']);
 
$pageTitle='Sign In';
?>
	<?php include('layout/header.php') ?>
  <div class="auth-content">
	<form action="#" method="POST">
		<h2 class="form-title">Sign In</h2>
		<?php echo $error;?>
		

	
		<div>
			<label>Email:</label>
			<input type="text" name="email"  class="text-input">
		</div>
		<div>
			<label>Password:</label>
			<input type="password" name="password"  class="text-input">
		</div>
		
		<div>
	 <input type="submit" name="logInBtn" class="btn btn-big" value="Sign In">
		</div>
		<p>Or <a href="signup.php">Sign Up</a></p>

	</form>
</div>























