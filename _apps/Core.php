<?php

//Write your custome class/methods here
namespace Apps;

class Core extends Model
{


	/** @return exit  */
	public function __construct()
	{
		parent::__construct();
	}

	public function GetUserInfo($id)
	{
		$query = "SELECT * FROM `users` WHERE `id`= '$id'";
		$query = mysqli_query($this->dbCon, $query);
		$query = mysqli_fetch_object($query);
		return $query;
	}

	public function Login($email, $password)
	{
		$sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
		$query = mysqli_query($this->dbCon, $sql);
		if ($query->num_rows) {
			$query = mysqli_fetch_object($query);
			return (int)$query->id;
		}
		return 0;
	}
	public function EditUser($id, $name, $email, $password, $role)
	{
		$sql = "UPDATE `users` SET `name`='$name',`role`='$role',`email`='$email',`password`='$password' WHERE  `id` = '$id' ";
		return mysqli_query($this->dbCon, $sql);
	}
	public function CreateUser($email, $name, $password, $dod, $parish, $img_name)
	{
		$sql = "INSERT INTO `users` (`name`,`email`, `password`, `dod`, `parish`,`img`) VALUES ('$name', '$email','$password', '$dod', '$parish', '$img_name')";
		return mysqli_query($this->dbCon, $sql);
	}

	// public function EditReflection($id, $title, $body, $image, $image2)
	// {
	// 	$sql = "UPDATE `users` SET `name`='$name',`role`='$role',`email`='$email',`password`='$password' WHERE  `id` = '$id' ";
	// 	return mysqli_query($this->dbCon, $sql);

	// }
}
