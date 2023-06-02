<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
    <p> logout </p>
<head>
    <body>
    <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et architecto error est quod veritatis aliquid nulla non aliquam? Commodi consectetur itaque libero a natus obcaecati repellat ullam, mollitia beatae dicta quidem explicabo, iste tempore distinctio! Veniam laboriosam optio, fuga suscipit rem deleniti cupiditate! Iure, unde quia dolorem voluptate quas architecto.</p>

    <p>Silahkan login kembali <a href = "http://localhost/PHP/project_nezta/login/login.php">disini</a></p>
    </body>
</html>
