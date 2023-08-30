<!-- start the session -->
<?php
session_start();

// making connection with database

require "../includes/database_connect.php";

// we need user id to make property id opt intrested
// if not logged in seding it back
// didnt work? user not logged in?
if (!isset($_SESSION['user_id'])) {
    echo json_encode(array("success" => false, "is_logged_in" => false));
    return;
}

// if logged in comes here 
// we store user_id and property_id
$user_id = $_SESSION['user_id'];
$property_id = $_GET["property_id"];

// table take user id and property id 
// checking if entries present
$sql_1 = "SELECT * FROM interested_users_properties WHERE user_id = $user_id AND property_id = $property_id";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo json_encode(array("success" => false, "message" => "Something went wrong"));
    return;
}

// no of rows >0 it means entries inside table 
// we delete from table if already present
if (mysqli_num_rows($result_1) > 0) {
    $sql_2 = "DELETE FROM interested_users_properties WHERE user_id = $user_id AND property_id = $property_id";
    $result_2 = mysqli_query($conn, $sql_2);
    if (!$result_2) {
        echo json_encode(array("success" => false, "message" => "Something went wrong"));
        return;
    } else {
        echo json_encode(array("success" => true, "is_interested" => false, "property_id" => $property_id));
        return;
    }
} else {
    $sql_3 = "INSERT INTO interested_users_properties (user_id, property_id) VALUES ('$user_id', '$property_id')";
    $result_3 = mysqli_query($conn, $sql_3);
    if (!$result_3) {
        echo json_encode(array("success" => false, "message" => "Something went wrong"));
        return;
    } else {
        echo json_encode(array("success" => true, "is_interested" => true, "property_id" => $property_id));
        return;
    }
}
