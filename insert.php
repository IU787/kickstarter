<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$text_zaprosa =  "INSERT INTO posts (title, description, goal, img, user, place)
							VALUES ('".$_GET["title"]."', '".$_GET["description"]."', '".$_GET["goal"]."', '".$_GET["img"]."', '".$_GET["user"]."', '".$_GET["place"]."')";
	$zapros = mysqli_query($connect, $text_zaprosa);
	if ($_GET['title']="" || $_GET['description']="" || $_GET['goal']="" || $_GET['img']="" ||  $_GET['user']="" || $_GET['place']="") {
        header('Location: acc.php?error=ЗАПОЛНИТЕ ВСЕ');

    } else {
        header('Location: acc.php');
    }
?>