<?php


$input = json_decode(file_get_contents('php://input'), true);
var_dump($input);
echo $input['username'];


//$json = file_get_contents('php://input');
//
//$employees = json_decode($json, true);
//foreach($employees['employees'] as $employee) {
//    echo $employee['firstName'];
////    var_dump($employee);
//}

//
//$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
//
//if ($contentType === "application/json") {
//    //Receive the RAW post data.
//    $content = trim(file_get_contents("php://input"));
//
//    $decoded = json_decode($content, true);
//    echo "success";
//    //If json_decode failed, the JSON is invalid.
//    if(! is_array($decoded)) {
//        echo 'Error';
//    } else {
//        // Send error back to user.
//        foreach($decoded as $employee) {
//            var_dump($employee);
//        }
//
//    }
//}