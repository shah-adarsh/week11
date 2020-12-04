<?php
include 'connect.php';



if(!isset(($_POST['search']))||($_POST['search'] === "")){
    $sql = "SELECT firstname, lastname, email from livesearch ORDER BY lastname ASC";
}
else{
    $search = $_POST['search'];
$sql = "select firstname, lastname, email from livesearch where firstname like '%$search%' or lastname like '%$search%' ORDER BY lastname ASC";

}
$query = $conn->query($sql);
$users = array();

while ($row = $query->fetch_arrray()){
	array_push($users,$row);
	}
$conn->close();

header("Content-type: application/json");
echo json_encode($users);
die();

?>
