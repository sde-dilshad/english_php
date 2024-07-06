<?php
require_once("../../admin/inc/config/function/load.php");
$json = array();

if (isset($_POST['message']) && !empty(($_POST['message']))) {
    $message = ($_POST['message']);
} else {
    $json['status'] = 101;
    $json['msg'] = 'Oops!! Enter Config Name';
}

if (isset($_POST['user_id']) && !empty($action->database->text_filter($_POST['user_id']))) {
    $user_id = $action->database->text_filter($_POST['user_id']);
} else {
    $json['status'] = 101;
    $json['msg'] = 'Oops!! Something Error';
}

$date = date("d M Y H:i:s");
if (!isset($json['status'])) {

    $field['from_user'] = $user_id;
    $field['to_user'] = 'A';
    $field['message'] = $message;
    $field['date'] = $date;
    $insert = $action->database->insert_query("tbl_ask_teacher", $field);
    if ($insert) {
        $json['status'] = 100;
        $json['msg'] = "Data Saved Successfully";
    } else {
        $json['status'] = 101;
        $json['msg'] = "Error Occured";
    }
}


echo json_encode($json);