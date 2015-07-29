<?php
if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
    $action = $_POST["action"];
    switch($action) { //Switch case for value of action
      case "insertdb": test_function(); break;
    }
  }
}

//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function test_function(){
  $return = $_POST;
  $host="localhost";
  $databasename="flair";
  $user="root";
  $pass="admin";
  $return["datac"] = $return['full_name'];
    $conn=mysql_connect($host,$user,$pass);    
    $db_selected = mysql_select_db($databasename, $conn);
      if (!$db_selected) {
          $return["status"] = "failed";
          echo json_encode($return);
      }
      else{
        $return["status"] = "success";
        $full_name = $return['full_name'];
        $mobile_no = $return['phoneNumber'];
        $email_id = $return['email'];
        $subject = $return['subject'];
        $message = $return['message'];

        $sql = "INSERT INTO contact_table ".
         "(full_name,mobile_no, email_id, subject,message_text) ".
         "VALUES('$full_name','$mobile_no', '$email_id', '$subject', '$message')";
         mysql_query($sql);
        $return["full_name"] = $full_name;
        echo json_encode($return);
      }
}
?>

