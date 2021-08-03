<?php

    function getMainPost() {
    $db = mysqli_connect("localhost", "root", "", "themesell");
        $query = "SELECT * FROM post ORDER BY date DESC LIMIT 20";
        $result = mysqli_query($db, $query);
        while ($row = mysqli_fetch_array($result)) {
            $query = "SELECT name FROM category 
                    INNER JOIN has_category ON category_id = has_category.category

            WHERE has_category.post= " . $row['id'];
            $cat_result = mysqli_query($db, $query);
            $categories = "";
            // while ($category = mysqli_fetch_array($cat_result)) {
            //     $categories .= '<span class="badge badge-primary fs-5">'. 
            //     $category['name'].'</span>';
            //         }
            echo '<article class="col-md-4 p-0">
            <div class="m-1 shadow">
                <img src="img/'. $row['id'].'.png" alt="'. $row['title'].'" class="img-fluid">
                <div class="article-content px-2 py-1">
                    <h2 class="fs-3 font-weight-bold mb-1">
                    '. $row['title'].'
                    </h2>
                    <div class="d-flex justify-content-between">
                        <p>'. $row['date'].'</p>
                        <p>'. $categories.'</p>
                    </div>
                </div>
            </div>
        </article>';
        }
    }
?>