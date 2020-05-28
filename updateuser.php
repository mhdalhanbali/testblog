<?php 
require('src/config.php');
require('src/dbconnect.php');
	loginCheck();
	$pageTitle = 'Update Post';
 
$first_name ='';
$last_name ='';
$email = '';
$phone = '';
$postal_code = '';
$street='';
$city = '';
$country = '';
$message='';
$error  = '';
if (isset($_POST['registerBtn'])) {
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$street = trim($_POST['street']);
	$postal_code = trim($_POST['postal_code']);
	$city = trim($_POST['city']);
	$country = trim($_POST['country']);
								

	if (empty($first_name)) {
		 $error .= "<li>First Name is requierd!</li>";
	}if (empty($last_name)) {
// 		 $error .= "<li>Last Name is requierd!</li>";
 	 }    
 	 if (empty($email)) {
		 $error .= "<li>Email Name is requierd!</li>";
	}if (empty($phone)) {
		 $error .= "<li>Phone Name is requierd!</li>";
	}if (empty($street)) {
		 $error .= "<li>Street is requierd!</li>";
	}
	if (empty($postal_code)) {
		 $error .= "<li>Postal Code is requierd!</li>";
	}if (empty($city)) {
		 $error .= "<li>City is requierd!</li>";
	}if (empty($country)) {
		 $error .= "<li>Country is requierd!</li>";
	}if ($error) {
            $error = "<ul class='error'>{$error}</ul>";
}if (empty($error)) {
		$userData = [
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email'    => $email,
		'phone' => $phone,
		'street' => $street,
		'postal_code'    => $postal_code,
		'city' => $city,
		'country' => $country,
		'id'       => $_GET['userId'],
            
		];
	$result = updateUser($userData);
	if ($result) {
                $message=
		'<div class="success" role="alert">
		You have successfully updated your information!

		</div>';
            } else {
                $error=
		'<div class="error" role="alert">
		User update failed. Please try again later!

		</div>';
            }
        }
    }

$user = fetchUserById($_GET['userId']);
?>

<?php include('layout/dashboard-header.php'); ?>
 <div class="auth-content">
	<form action="#" method="POST">
		<h2 class="form-title">Register</h2>
		<?php echo $error;?>
		<?php echo $message;?>

		<div>
			<label>First Name:</label>
			<input type="text" name="first_name"  class="text-input" value="<?=htmlentities($user['first_name'])?>">
			
		</div>
		<div>
			<label>Last Name:</label>
			<input type="text" name="last_name"  class="text-input" value="<?=htmlentities($user['last_name'])?>">
			
		</div>
		
		<div>
			<label>Email:</label>
			<input type="text" name="email"  class="text-input" value="<?=htmlentities($user['email'])?>">
		</div>
		<div>
			<label>Phone Number:</label>
  			<input type="tel" id="phone" class="text-input" name="phone"  value="<?=htmlentities($user['phone'])?>">

		</div>
		<div>
			<label>Street:</label>
			<input type="text" name="street"  class="text-input" value="<?=htmlentities($user['street'])?>">
		</div>
		<div>
			<label>Postal Code:</label>
			<input type="text" name="postal_code"  class="text-input" value="<?=htmlentities($user['postal_code'])?>">
		</div>
		<div>
			<label>City:</label>
			<input type="text" name="city"  class="text-input" value="<?=htmlentities($user['city'])?>">
		</div> 
		<div>
			<label>Country:</label>
			<input type="text" name="country"  class="text-input" value="<?=htmlentities($user['country'])?>">
		</div> 
		
		
		<div>
	 <input type="submit" name="registerBtn" class="btn btn-big" value="Update">
		</div>
		<p>Or <a href="dashboard.php">Tillbaka</a></p>

	</form>
</div>