<?php
/**
 *Author: Katie Stinson
 *Date: 1/24/23
 *File: list_movie.php
 *Description:
 */
ini_set("display_errors", 1);
require_once 'classes/list_movie.class.php';
require_once 'classes/movie_manager.class.php';

//create movie manager object
$movie_manager = MovieManager:: getMovieManager();

//get all movies
$movies = $movie_manager->list_movie();

//handle errors if last query fails
if(!$movies){
    $message = "There was a problem displaying movies.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

//if no error continue...
//display all movies
$view = new ListMovie();
$view->display($movies);