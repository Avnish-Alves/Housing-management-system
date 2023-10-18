<?php
session_start();

// Initialize variables to store user input
$ID = $FullName = $UserType = $Email = $Phone = $Password = "";

// Check if the form has been submitted
$db = mysqli_connect('localhost', 'pma', '', 'rentalhouse');

if (isset($_POST['reg_user'])) {
    $ID = mysqli_real_escape_string($db, $_POST['ID']);
    $FullName = mysqli_real_escape_string($db, $_POST['FullName']);
    $UserType = mysqli_real_escape_string($db, $_POST['UserType']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Phone = mysqli_real_escape_string($db, $_POST['Phone']);
    $Password = mysqli_real_escape_string($db, $_POST['Password']);

    // Check if the user already exists in the database
    $user_check_query = "SELECT * FROM userregistration WHERE FullName = '$FullName' OR Email = '$Email' OR Phone = '$Phone' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            // User with the same name, email, or phone already exists
            // Handle the duplicate user registration here, for example, show an error message.
            echo "User already exists.";
        } else {
            // User does not exist, proceed with registration
            $insert_query = "INSERT INTO userregistration (ID, FullName, UserType, Email, Phone, Password) VALUES ('$ID', '$FullName', '$UserType', '$Email', '$Phone', '$Password')";

            if (mysqli_query($db, $insert_query)) {
                // Registration successful
                echo "Registration successful.";
            } else {
                // Handle the database query error, for example, show an error message.
                echo "Error: " . mysqli_error($db);
            }
        }
    } else {
        // Handle the database query error, for example, show an error message.
        echo "Database query error.";
    }
}

mysqli_close($db);
?>
