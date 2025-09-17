<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zaffa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$invitees_count = $_POST['invitees_count'];
$start_date = $_POST['start_date'];
$start_time = $_POST['start_time'];
$end_date = $_POST['end_date'];
$end_time = $_POST['end_time'];
$main_dishes = implode(',', $_POST['main_dish'] ?? []);
$side_dishes = implode(',', $_POST['side_dish'] ?? []);
$salads = implode(',', $_POST['salad'] ?? []);
$drinks = implode(',', $_POST['drink'] ?? []);
$desserts = implode(',', $_POST['dessert'] ?? []);
$arabic_firstname = $_POST['arabic_firstname'];
$arabic_lastname = $_POST['arabic_lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO event_details (invitees_count, start_date, start_time, end_date, end_time, main_dishes, side_dishes, salads, drinks, desserts, arabic_firstname, arabic_lastname, phone, email)
VALUES ('$invitees_count', '$start_date', '$start_time', '$end_date', '$end_time', '$main_dishes', '$side_dishes', '$salads', '$drinks', '$desserts', '$arabic_firstname', '$arabic_lastname', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    $client_id = $conn->insert_id;
    header("Location: display_info.php?id=$client_id");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
