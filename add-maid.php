<?php
require_once "connect.php";

$response = array();

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msisdn'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msisdn = $_POST['msisdn'];
    $description = $_POST['description'];
    $address = $_POST['address'];

    $conn = connect();

    // insert maid logic
    $sql = "INSERT INTO maids (name, email, msisdn, description, address)
      VALUES ('$name', '$email', '$msisdn', '$description', '$address')";

    if ($conn->query($sql) === TRUE) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Maid successfully Added.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Error: " . $sql . "<br>" . $conn->error;

        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // failed to insert row
    $response["success"] = 0;
    $response["message"] = "Missing Fields.";

    // print_r($_POST);


    // echoing JSON response
    echo json_encode($response);
}
