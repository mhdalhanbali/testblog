<?php 
// Adding User 
function addUser($userData){
		global $dbconnect;
	try {
		$query= "INSERT INTO users (first_name,last_name,email,password,phone,street,postal_code,city,country)
		VALUES(:first_name,:last_name,:email,:password,:phone,:street,:postal_code,:city,:country);

		";
		$stmt=$dbconnect->prepare($query);
		$stmt-> bindValue(':first_name',$userData['first_name']);
		$stmt-> bindValue(':last_name',$userData['last_name']);
		$stmt-> bindValue(':email',$userData['email']);
		$stmt-> bindValue(':password',password_hash($userData['password'], PASSWORD_DEFAULT));
		$stmt-> bindValue(':phone',$userData['first_name']);
		$stmt-> bindValue(':street',$userData['street']);
		$stmt-> bindValue(':postal_code',$userData['postal_code']);
		$stmt-> bindValue(':city',$userData['city']);
		$stmt-> bindValue(':country',$userData['country']);
		$result = $stmt->execute();
		
		
	} catch(\PDOException $e) {
	        throw new \PDOException($e->getMessage(), (int) $e->getCode());
		
	}
	return $result;
}

function updateUser($userData){
	global $dbconnect;
try {
		$query = "  UPDATE users
                    SET first_name = :first_name, last_name = :last_name, email = :email, phone = :phone, street = :street, postal_code = :postal_code, city = :city, country = :country
                    WHERE id = :id
		";
		$stmt = $dbconnect->prepare($query);
		$stmt->bindvalue(':first_name',$userData['first_name']);
		$stmt->bindvalue(':last_name',$userData['last_name']);
		$stmt->bindvalue(':email',$userData['email']);
		$stmt->bindvalue(':phone',$userData['phone']);
		$stmt->bindvalue(':street',$userData['street']);
		$stmt->bindvalue(':postal_code',$userData['postal_code']);
		$stmt->bindvalue(':city',$userData['city']);
		$stmt->bindvalue(':country',$userData['country']);
		$stmt->bindvalue(':id', $userData['id']);
		$result = $stmt->execute();
		
	} catch (\PDOException $e) {
throw new \PDOException($e->getMessage(), (int) $e->getCode());
		
	}
                
	return $result;
}
function deleteUser($id){
global $dbconnect;

try {
	$query = "DELETE FROM users
WHERE id = :id;
	";
	$stmt = $dbconnect->prepare($query);
	$stmt->bindValue(':id',$id);
	$result = $stmt->execute();
	
} catch (\PDOException $e) {
	throw new \PDOException($e->getMessage(),(int) $e->getCode());
	
}
return $result;
}
function fetchUser(){
	global $dbconnect;
try {
		$query = "SELECT * FROM users
		

		";
	$stmt = $dbconnect->query($query);
		$user = $stmt->fetch();
} catch (\PDOException $e) {
	throw new \PDOException ($e->getMessage(), (int) $e->getCode());
	
								
}
return $user;
}

function fetchUserById($id){
	global $dbconnect;
	try {
        $query = "
            SELECT * FROM users
            WHERE id = :id
        ";

        $stmt = $dbconnect->prepare($query);
        $stmt->bindvalue(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch();
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int) $e->getCode());
    }
   return $user;
}



 ?>