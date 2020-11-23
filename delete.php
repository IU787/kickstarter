<?php
    $connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
    $text = "DELETE FROM posts WHERE id = '".$_GET['id']."' ";
    $zapros_vstavit = mysqli_query($connect, $text);
    header('Location: acc.php?name=' . $_GET['user'] . '');
    exit();
?>