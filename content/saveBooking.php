<?php

require_once 'DB.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $bookingdate = $_POST['bookingdate'];
    $tableno = $_POST['t'];
    $noofpersons = $_POST['per'];

    $sql = "INSERT INTO bookings(id,name,bookingdate,tableno,noofpersons) values(DEFAULT, ?, ?, ?, ?)";
    $isContact = DB::query($sql, [
        $name, $bookingdate, $tableno, $noofpersons
    ]);
    echo "1";
    exit;
}
?>

