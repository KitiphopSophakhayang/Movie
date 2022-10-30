<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "movie");
mysqli_query($objConnect, "SET NAMES utf8");

$sql = "DELETE FROM members WHERE MID ='" . $_GET["MID"] . "'";
if (mysqli_query($objConnect, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($objConnect);
}
mysqli_close($objConnect);
?>