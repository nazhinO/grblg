<?php

	function emptyInputSignup($name, $username, $password, $cpassword){
		$result;
		if(empty($name) || empty($username) || empty($password) || empty($cpassword)){
			$result = true;
		}else{
			$result = false;
		}
		return $result;
	}

	function invalidUsername($username){
		$result;
		if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
			$result = true;
		}else{
			$result = false;
		}
		return $result;
	}

	function passwordMatch($password, $cpassword){
		$result;
		if($password !== $cpassword){
			$result = true;
		}else{
			$result = false;
		}
		return $result;
	}

	function usernameExists($conn, $username){
		$sql = "SELECT * FROM user WHERE userAlias = ?;";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("location: ../pages/signup.php?error=stmtfailed");
			exit();
		}
		mysqli_stmt_bind_param($stmt, "s", $username);
		mysqli_stmt_execute($stmt);

		$resultData = mysqli_stmt_get_result($stmt);

		if($row = mysqli_fetch_assoc($resultData)){
			return $row;
		}else{
			$result = false;
			return $result;
		}
		mysqli_stmt_close($stmt);
	}

	function createUser($conn, $name, $username, $password){
		$sql = "INSERT INTO user(userName, userAlias, userPwd) VALUES (?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("location: ../pages/signup.php?error=stmtfailed");
			exit();
		}

		$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

		mysqli_stmt_bind_param($stmt, "sss", $name, $username, $hashedPwd);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);

		header("location: ../pages/signup.php?error=none");
		exit();
	}

	function emptyInputLogin($username, $password){
		$result;
		if(empty($username) || empty($password)){
			$result = true;
		}else{
			$result = false;
		}
		return $result;
	}

	function loginUser($conn, $username, $password){
		$usernameExists = usernameExists($conn, $username);

		if($usernameExists === false){
			header("location: ../pages/login.php?error=wronglogin");
			exit();
		}
		$pwdHashed = $usernameExists["userPwd"];
		$checkPwd = password_verify($password, $pwdHashed);
		if($checkPwd === false){
			header("location: ../pages/login.php?error=checkpass");
			exit();
		}else if($checkPwd === true){
			session_start();
			$_SESSION["userID"] = $usernameExists["userID"];
			$_SESSION["userAlias"] = $usernameExists["userAlias"];
			//$_SESSION["userName"] = $usernameExists["userName"];
			header("location: ../pages/dashboard.php");
			exit();
		}
	}