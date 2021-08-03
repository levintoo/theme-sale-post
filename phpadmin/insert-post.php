<?php


    $title = $_POST['title'];
    $seo = $_POST['seotitle'];
    $content = $_POST['content'];
    $category = $_POST['category']; // example 1 2
    $author = $_POST['author'];
  
    $db = mysqli_connect("localhost", "root", "", "themesell");

    $query = "INSERT INTO post(title, seo_title, content, author) VALUES ('$title', '$seo', '$content', '$author')";
    mysqli_query($db, $query);

    $query = "SELECT id FROM post WHERE seo_title = '$seo'";
    $result = mysqli_query($db, $query);

    $row = mysqli_fetch_array($result);
    echo "id is". $row[0];

    $post_id = $row[0];
    $category_array = explode(" ", $category); // 1 2 3 4 5 6 7 8 9 a

    foreach ($category_array as $el) {
        $query = "INSERT INTO has_category (post, category) VALUES ($post_id, $el)";
        mysqli_query($db, $query);

    }

    header('Loacation : http://localhost:7882/themesell/phpadmin/insert-post.php')
?>