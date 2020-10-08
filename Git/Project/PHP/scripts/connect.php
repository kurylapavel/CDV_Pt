<?php

    // $connection = mysqli_connect('localhost','root','root');
    // $select_db = mysqli_select_db($connection,'project');

    $conn = new mysqli('localhost','root','',"project");
    mysqli_set_charset($conn, 'utf8');
?>