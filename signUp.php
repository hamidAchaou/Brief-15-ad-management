<?php 
include 'connect.php';
include 'index.php';
if (isset($_POST['sign_up'])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    // $password = $_POST["password"];
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $phonNumber = $_POST["phonNumber"];

    $sql = "INSERT INTO client (first_name, last_name, email, password, phone_number)
    VALUES ('$firstName', '$lastName', '$email', '$password_hash', $phonNumber)";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo "<script> swal('Succses', 'your acount not create', 'warning'); </script>";
      header("location: clents.php");
    } else {
      // echo "Error: " . $sql . "<br>" . $conn->error;
      echo "<script> swal('welcom', 'your acount is a create', 'success'); </script>";

    }
}

?>