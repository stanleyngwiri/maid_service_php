<?php
require_once "connect.php";

$response = array();
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM maids WHERE id = {$id}";

    $conn = connect();

    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $response['id'] = $row['id'];
        $response['name'] = $row['name'];
        $response['msisdn'] = $row['msisdn'];
        $response['email'] = $row['email'];
        $response['description'] = $row['description'];
        $response['address'] = $row['address'];
        $response['rating'] = $row['rating'];
        $response['services'] = $row['services'];
        $response['experience'] = $row['experience'];
        $response['age'] = $row['age'];
        $response['status'] = $row['status'];

        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode($response);
    } else {
        $response['status'] = 'failed';
        $response['reason'] = 'No Record found';

        header('Content-Type: application/json');
        http_response_code(204);
        echo json_encode($response);
    }
} else {
    header('Content-Type: application/json');
    http_response_code(400);
}
