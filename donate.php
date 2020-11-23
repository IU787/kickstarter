<?php
    $connect= mysqli_connect("127.0.0.1","root","","kickstarter");
    $UPDATE = mysqli_query($connect , "SELECT * FROM posts WHERE id = '".$_GET['id']."' ");
    $result = $UPDATE->fetch_assoc();
    $summ = $result["donated"] + 10;
    $zapros_text = "UPDATE posts SET donated = '{$summ}' WHERE id = '".$_GET['id']."'";
    $zapros_update = mysqli_query($connect, $zapros_text);
    header('Location: http://lesson31/index.php');
    exit();
?>