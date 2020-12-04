<?php
include 'connect.php';

if(!isset(($_POST['search']))||($_POST['search'] === "")){
    $sql = "SELECT firstname, lastname, email from livesearch ORDER BY lastname ASC";
}
else{
    $search = $_POST['search'];
$sql = "select firstname, lastname, email from livesearch where firstname like '%$search%' or lastname like '%$search%' ORDER BY lastname ASC";

}
header("Content-type: application/json");
echo json_encode($users);
die();

?>
