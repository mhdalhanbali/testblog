<?php
require('src/config.php');
require('src/dbconnect.php'); 
if (!isset($_SESSION['user'])) {
	header('location: signin.php');
	exit;
}

// Deleting User
if (isset($_POST['deletePostBtn'])) {
	
$result= deleteUser($_POST['userId']);   
if ($result) {
	session_destroy();
	redirectLocation('signin.php');
}

}

// Fetching User

$user = fetchUser();


$pageTitle = 'Dashboard'; 
 ?>

								  
 


<?php include('layout/dashboard-header.php') ?>

					<h2 class="">Manage Users</h2>
					<table>
						<thead>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>street</th>
							<th>Postal Code</th>
							<th>City</th>
							<th>Country</th>
							<th>Register Date</th>
							
							<th colspan="2">Action</th>
						</thead>
						<tbody>
							
						
							<tr>
								<td><?=htmlentities(substr($user['first_name'], 0,20))?></td>
								<td><?=htmlentities($user['last_name'])?></td>
								<td><?=htmlentities(substr($user['email'], 0,20))?></td>
								<td><?=htmlentities(substr($user['phone'], 0,20))?></td>
								<td><?=htmlentities(substr($user['street'], 0,20))?></td>
								<td><?=htmlentities(substr($user['postal_code'], 0,20))?></td>
								<td><?=htmlentities(substr($user['city'], 0,20))?></td>
								<td><?=htmlentities(substr($user['country'], 0,20))?></td>
								<td><?=htmlentities($user['register_date'])?></td>
								<form action="#" method="POST">
									<input type="hidden" name="userId" value="<?=$user['id']?>">
									<td><input type="submit" name="deletePostBtn" value="Delete" class="btn delete"></td>
								</form>
								
								<form action="updateuser.php" method="GET">
									<input type="hidden" name="userId" value="<?=$user['id']?>">
									<td><input type="submit" name="" value="Edit" class="btn edit"></td>
									
								</form>
								<?php 
								chcekingInfo($_POST);
								?>
								

								
								
							</tr>
							
						</tbody>
					</table>
				</div>
			
		
	