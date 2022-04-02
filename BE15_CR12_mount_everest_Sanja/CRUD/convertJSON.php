<?php 
//This will convert to a JSON Output
function response($status, $status_message, $data) {
    $response["status"] = $status;
    $response["status_message"] = $status_message;
    $response["data"] = $data;

    //output JSON
    echo json_encode($response);
}

?>