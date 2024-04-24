<?php
echo "PHP code is executed!";

if (isset($_POST['submit'])) {
    $leaveType = $_POST['leaveType'];
    $myTextField = "";

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'leave-db';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if ($leaveType === 'Others') {
        $myTextField = $_POST['myTextField']; // Get the text field value if "Others" is selected
    }

    $sql = "INSERT INTO others(leaveType) VALUES ('$leaveType')"; // Updated query with reason column

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
