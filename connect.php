<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $con = new mysqli('localhost', 'root', '', 'contact');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
   
    $sql = "INSERT INTO contact_form (fullName, email, message) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);

    
    $stmt->bind_param("sss", $fullName, $email, $message);

    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        die("Error: " . $stmt->error);
    }
    $stmt->close();
    $con->close();
}
?>
