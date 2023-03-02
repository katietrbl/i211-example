<?php
/**
 *Author: Katie Stinson
 *Date: 2/2/23
 *File: search_movie.class.php
 *Description:
 */

require_once 'application/app_view.class.php';

//create search movie class
class SearchMovie {
//add terms before movies to ensure that file accepts the two parameters
    public function display($terms, $movies) {
        AppView::displayHeader("Show All Related Movies");
        ?>

        <div id="main-header"> Movies in the Library</div>
        <div class="grid-container">
            <?php
            if ($movies === 0) {
                echo "No movie was found.<br><br><br><br><br>";
            } else {
                //display movies in a grid; six movies per row
                foreach ($movies as $i => $movie) {
                    $id = $movie->getId();
                    $title = $movie->getTitle();
                    $rating = $movie->getRating();
                    $release_date = $release_date = new DateTime($movie->getReleaseDate());
                    $image = $movie->getImage();
                    if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
                        $image = MOVIE_IMG . $image;
                    }
                    if ($i%6 == 0) {
                        echo "<div class='row'>";
                    }
                    echo "<div class='col'><p><a href='view_movie.php?id=" . $id . "'><img src='" . $image .
                        "'></a><span>$title<br>Rated $rating<br>" . $release_date->format('m-d-Y') . "</span></p></div>";
                    ?>
                    <?php
                    if ($i%6 == 5 || $i == count($movies) - 1) {
                        echo "</div>";
                    }
                }
            }
            ?>
        </div>
        <?php
        AppView::displayFooter();
    }
}
