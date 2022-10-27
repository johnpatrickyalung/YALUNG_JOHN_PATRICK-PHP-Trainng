<?php 
require_once  '../../config/config.php';
$fnameErr= $lnameErr = $emailErr = $passErr = $confirmErr = "";
$fname =$lname = $email = $gender = $pass = $website = "";

$errors = [];
$data = [];

if (empty($_POST['first_name'])) {
    $errors['first_name'] = 'Name is required.';
   
}
if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}



echo json_encode($data);
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (empty($_POST["first_name"])) {
//         $fnameErr = "Please enter a valid name";
//     }
        



// echo json_encode($response = [
//     'status' => 200,
//     'msg' => 'Post added successfully added'
// ]);
    
// }