<?php

function dBconnect()
{ 
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$dbname     = "dcheroes";
	$conn       = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error($conn));

	return $conn;
}



//var_dump($conn);

function getTeams()
{
	// Connect to Database.
	$conn = dBconnect();
	// Define an empty array to store teams.
	$teams = array();

	// Define the query to fetch data from the database.
	$getTeamsSQL = "
	SELECT * FROM `teams` ORDER BY `teamName` ASC
	";

	// perform $query on $conn and store recource
	$resource = mysqli_query($conn, $getTeamsSQL) or die(mysqli_error($conn));

	while($row = mysqli_fetch_assoc($resource))
	{
		$teams[] = $row;
	}

	return $teams;

}

function myDump($myVar)
{
    echo "<pre>";
    var_dump($myVar);
    echo "<pre>";
}

function getCharacters()
{
	// Connect to Database.
	$conn = dBconnect();
	// Define an empty array to store teams.
	$characters = array();

	// Define the query to fetch data from the database.
	$getCharactersSQL = "
	SELECT * FROM `teams` ORDER BY `teamName` ASC
	";

	// perform $query on $conn and store recource
	$resourceCharacter = mysqli_query($conn, $getCharactersSQL) or die(mysqli_error($conn));

	while($row = mysqli_fetch_assoc($resourceCharacter))
	{
		$characters[] = $row;
	}

	return $characters;

}

?>