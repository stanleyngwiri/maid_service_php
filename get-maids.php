<?php
require_once "connect.php";


$sql = "SELECT * FROM maids";

$conn = connect();

$result = $conn->query($sql);

$response = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rowData['id'] = $row['id'];
        $rowData['name'] = $row['name'];
        $rowData['msisdn'] = $row['msisdn'];
        $rowData['email'] = $row['email'];
        $rowData['description'] = $row['description'];
        $rowData['address'] = $row['address'];

        array_push($response, $rowData);
    }

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
