<?php


    $title = $_POST['title'];
    $seo = $_POST['seotitle'];
    $content = $_POST['content'];
    $category = $_POST['category']; // example 1 2
    $author = $_POST['author'];
  
    echo $title;
    $db = mysqli_connect("localhost", "root", "", "themesell");

    $query = "INSERT INTO post(title, seo_title, content, author) VALUES ('$title', '$seo', '$content', '$author')";
    mysqli_query($db, $query);
?>