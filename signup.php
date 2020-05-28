		<?php 
		require('src/config.php');
		require('src/dbconnect.php');
		$pageTitle='Sign Up';

		$first_name ='';
		$last_name ='';
		$email = '';
		$phone = '';
		$postal_code = '';
		$street='';
		$city = '';
		$country = '';
		$error = '';
		$message='';
		if (isset($_POST['registerBtn'])) {
		$first_name = trim($_POST['first_name']);
		$last_name = trim($_POST['last_name']);
		$email = trim($_POST['email']);
		// $phone = trim($_POST['phone']);
		// $street = trim($_POST['street']);
		// $postal_code = trim($_POST['postal_code']);
		// $city = trim($_POST['city']);
		// $country = trim($_POST['country']);
		$password = trim($_POST['password']);
		$confPassword = trim($_POST['confPassword']);
		if (empty($first_name)) {
		$error .= "<li>First Name is requierd!</li>";
		}
		if (empty($last_name)) {
		$error .= "<li>Last Name is requierd!</li>";
		}

		if (empty($email)) {
		$error .= "<li>Email is requierd!</li>";
		}
		// if (empty($phone)) {
		// 		 $error .= "<li>Phone is requierd!</li>";
		// 	}
		// if (empty($street)) {
		// 		 $error .= "<li>Street is requierd!</li>";
		// 	}
		// if (empty($postal_code)) {
		// 		 $error .= "<li>Postal Code is requierd!</li>";
		// 	}

		// if (empty($city)) {
		// 		 $error .= "<li>City is requierd!</li>";
		// 	}
		// if (empty($country)) {
		// 		 $error .= "<li>Country is requierd!</li>";
		// 	}
		if (empty($password)) {
		$error .= "<li>Password is requierd!</li>";
		if (empty($confPassword)) {
		$error .= "<li>Confirm Password is requierd!</li>";
		}
		}
		if (!empty($password) && strlen($password) < 6) {
		$error .= "<li>Password can't be less than six charactares!</li>";
		}
		if ($password !== $confPassword) {
		$error .= "<li>Password doesn't match!</li>";

		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error .= "<li>Invalid email</li>";
		}

		if ($error) {
		$error = "<ul class='error'>{$error}</ul>";
		}   if (empty($error)) {
			$userData = [
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email'    => $email,
		'password' => $password,
		'street' => $street,
		'postal_code'    => $postal_code,
		'city' => $city,
		'country' => $country,


		];
		$result = addUser($userData);

		if ($result) {
	
		$message=
		'<div class="success" role="alert">
		You have registered successfully!

		</div>';
		}else{
		$message=
		'<div class="error" role="alert">
		Registration failed. Please try again later!

		</div>';
}

		
		}
		}
		?>






<?php include('layout/header.php'); ?>
 <div class="auth-content">
	<form action="#" method="POST">
		<h2 class="form-title">Register</h2>
		<?php echo $error;?>
		<?php echo $message;?>

		<div>
			<label>First Name:</label>
			<input type="text" name="first_name"  class="text-input" value="<?=htmlentities($first_name)?>">
			
		</div>
		<div>
			<label>Last Name:</label>
			<input type="text" name="last_name"  class="text-input" value="<?=htmlentities($last_name)?>">
			
		</div>
		
		<div>
			<label>Email:</label>
			<input type="text" name="email"  class="text-input" value="<?=htmlentities($email)?>">
		</div>
		<!-- <div>
			<label>Phone Number:</label>
  			<input type="tel" id="phone" class="text-input" name="phone"  value="<?=htmlentities($phone)?>">

		</div>
		<div>
			<label>Street:</label>
			<input type="text" name="street"  class="text-input" value="<?=htmlentities($street)?>">
		</div>
		<div>
			<label>Postal Code:</label>
			<input type="text" name="postal_code"  class="text-input" value="<?=htmlentities($postal_code)?>">
		</div> -->
	<!-- 	<div>
			<label>City:</label>
			<input type="text" name="city"  class="text-input" value="<?=htmlentities($city)?>">
		</div> -->
		<!-- <div>
			<label>Country:</label>
			<input type="text" name="country"  class="text-input" value="<?=htmlentities($country)?>">
		</div> -->
		
		<div>
			<label>Password:</label>
			<input type="password" name="password"  class="text-input">
		</div>
		<div>
			<label>Confirm Password:</label>
			<input type="password" name="confPassword"  class="text-input">
		</div>
		<div>
	 <input type="submit" name="registerBtn" class="btn btn-big" value="Register">
		</div>
		<p>Or <a href="signin.php">Sign In</a></p>

	</form>
</div>