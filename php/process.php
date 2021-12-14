<?php
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    // $username = mysql_real_escape_string($username);
    // $password = mysql_real_escape_string($password);


    mysql_connect("localhost", "root", "");
    mqsql_select_db("login");

    $result = mysql_query("select * from users where username = '$username' and password = '$password'") or die("Failed to query database".mysql_error());
    $row = mqsql_fetch_array($result);

    if ($row['username'] == $username && $row['password'] == $password) {
        echo "Login success! Welcome ".$row['username'];
    } else {
        echo "Failed to login!";
    }
?>