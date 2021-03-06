<?php
require_once "connect.php";


$sql = "SELECT * FROM maids ORDER BY id ASC";

$conn = connect();

$result = $conn->query($sql);



if ($result->num_rows > 0) {

  $response = array();
  $response["records"] = array();

    while ($row = $result->fetch_assoc()) {
        $rowData['id'] = $row['id'];
        $rowData['name'] = $row['name'];
        $rowData['msisdn'] = $row['msisdn'];
        $rowData['email'] = $row['email'];
        $rowData['description'] = $row['description'];
        $rowData['address'] = $row['address'];
        $rowData['rating'] = $row['rating'];
        $rowData['services'] = $row['services'];
        $rowData['experience'] = $row['experience'];
        $rowData['age'] = $row['age'];
        $rowData['status'] = $row['status'];

        array_push($response["records"], $rowData);
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
