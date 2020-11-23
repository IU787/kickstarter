<?php 
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
    $UPDATE = mysqli_query($connect , "UPDATE posts SET title = '". $_GET['title'] ."',
                             description = '". $_GET['description'] ."', goal = '". $_GET['goal'] ."', img = '". $_GET['img'] ."', place = '". $_GET['place'] ."', user = '". $_GET['user'] ."' WHERE id = '".$_GET['id']."' ");
    header('Location: acc.php?name=' . $_GET['user'] . '');
    exit();
?> 