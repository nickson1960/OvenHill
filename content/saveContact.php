<?php

require_once 'DB.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO contactus(id,name,email,msg) values(DEFAULT, ?, ?, ?)";
    $isContact = DB::query($sql, [
        $name, $email, $msg
    ]);
    echo "1";
    exit;
}
?>

