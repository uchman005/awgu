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
}
