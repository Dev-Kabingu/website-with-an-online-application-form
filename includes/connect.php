
<?php

$conn = mysqli_connect ("localhost","root","","creighton-university");

// if (!$conn) {
//     die("connection failed");
// }else{
//     echo "connection successful";
// }

session_start();

function insert($conn){
    if(isset($_POST['submit'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $course = $_POST["course"];

        // check whether the user exist
        $sql = "SELECT * FROM students WHERE email = '$email' OR phone = '$phone'";
        $result = mysqli_query($conn, $sql);
        // check if record exist
        if (mysqli_num_rows($result) > 0){
            $_SESSION['message'] = "You have already applied with this email or phone number";
            header("Location: includes/confirmation.php");
            exit();
        }
// if record does not exist
        $sql = "INSERT INTO students(name, email, phone, gender, address, course)
             VALUES ('$name','$email','$phone','$gender','$address','$course')";

        $result = mysqli_query($conn, $sql);
        if($result){
            $_SESSION['message'] = "Application Successful.";
            // echo"submission successful";
        }else{
            // die ("admission failed");
            $_SESSION['message'] = "Application Failed!" . mysqli_query_error($result);
        }
        header("Location: includes/confirmation.php");
        exit();

    }

}