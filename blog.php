<?php

    include("conn.php");

    $sql = "SELECT id, title, body, DATE(publish_date) AS publish_date FROM blog_posts ORDER BY publish_date DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        // $counter = 1;
        // echo '<div class="accordion">';
        
        // while ($row = mysqli_fetch_assoc($result)) {
        //     $collapse_id = 'collapse_' . $counter;

        //     echo '<div class="accordion-item" id="accordionExample"';
        //     echo    '<h2 class="accordion-header">';
        //     echo        '<button class="accordion-button collapsed py-1" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapse_id . '" aria-expanded="true" aria-controls="' . $collapse_id . '">';
        //     echo            $row['publish_date'] . '  '. $row['title'];
        //     echo        '</button>';
        //     echo    '</h2>';
        //     echo    '<div id="' . $collapse_id . '" class="accordion-collapse collapse" data-bs-parent="#accordionExample">';
        //     echo        '<div class="accordion-body">';
        //     echo            '<small>'. $row['body'] . '</small>';
        //     echo        '</div>';
        //     echo    '</div>';
        //     echo '</div>';

        //     $counter++;
        // }
        // echo '</div>';





        $counter = 1;
        echo '<div class="accordion text-light bg-dark">';

        while ($row = mysqli_fetch_assoc($result)) {
            $collapse_id = 'collapse_' . $counter;

            echo '<div class="accordion-item">';
            echo    '<h2 class="accordion-header text-light">';
            echo        '<button class="accordion-button collapsed py-1 bg-dark text-light py-3" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapse_id . '" aria-expanded="true" aria-controls="' . $collapse_id . '">';
            echo            $row['publish_date'] . '  '. $row['title'];
            echo        '</button>';
            echo    '</h2>';
            echo    '<div id="' . $collapse_id . '" class="accordion-collapse collapse" data-bs-parent="#accordionExample">';
            echo        '<div class="accordion-body bg-dark text-white">';
            echo            '<small>'. $row['body'] . '</small>';
            echo        '</div>';
            echo    '</div>';
            echo '</div>';

            $counter++;
        }
        echo '</div>';





    } else {
        echo "No blog posts found.";
    }
    
    mysqli_close($conn);

?>