<?php
require_once "connect.php";

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


// get posted data
$data = json_decode(file_get_contents("php://input"));

$response = array();

if (
    !empty($data->name) &&
    !empty($data->email) &&
    !empty($data->msisdn)
) {

    $name = $data->name;
    $email = $data->email;
    $msisdn = $data->msisdn;
    $description = $data->description;
    $address = $data->address;

    $conn = connect();

    // insert maid logic
    $sql = "INSERT INTO maids (name, email, msisdn, description, address)
      VALUES ('$name', '$email', '$msisdn', '$description', '$address')";

    if ($conn->query($sql) === TRUE) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Maid successfully Added.";

        // echoing JSON response
        http_response_code(201);
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Error: " . $sql . "<br>" . $conn->error;

        // echoing JSON response

        http_response_code(500);
        echo json_encode($response);
    }
} else {
    // invalid data
    $response["success"] = 0;
    $response["message"] = "Missing Fields.";

    // print_r($_POST);


    // echoing JSON response
    http_response_code(400);
    echo json_encode($response);
}
