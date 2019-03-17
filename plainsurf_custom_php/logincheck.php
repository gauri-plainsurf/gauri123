<?php

session_start();

if(!isset($_COOKIE[$user])) {
    echo "Cookie named '" . $user . "' is not set!";
} else {
    echo "Cookie '" . $user . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$user];
}


$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo"connection successful";
} else {
    echo"connection failed";
}

$db = mysqli_select_db($con, 'form');

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "select *from login where user = '$user' and pass = '$pass'";

    $query = mysqli_query($con, $sql);

    $row = mysqli_num_rows($query);
    if ($row == 1) {
        $cookie_name = "user";
        $cookie_value = "$user";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

        echo"login successful";
        $_SESSION['user'] = $user;
        header('location:contact_list.php');
    } else {
        echo"login failed";
        header('location:index.php');
    }
}