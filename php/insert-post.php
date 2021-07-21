<?php
    $title = $_POST['title'];
    $seo = $_POST['seo'];
    $content = $_POST['content'];
    $category = $_POST['category']; // example 1 2


    $db = mysql_connect("localhost", "user", "pass", "themesale");

    $query = "INSERT INTO post(title, seo_title, content, author) VALUES ($title, $seo, $content, $category)";
    mysql_exec($db, $query);
?>