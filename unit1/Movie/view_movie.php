<?php
/**
 *Author: Katie Stinson
 *Date: 1/26/23
 *File: view_movie.php
 *Description:
 */

ini_set("display_errors", 1);


//get movie id from query string var
if (!isset($_GET['id']) || !is_int(intval($_GET['id']))) {
    //handle errors
    $message = "Movie id is invalid.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

require_once 'classes/view_movie.class.php';
require_once 'classes/movie_manager.class.php';

$id = intval($_GET['id']); if (!isset($_GET['id']) || !is_int(intval($_GET['id']))) {
    //handle errors
    $message = "Movie id is invalid.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}
$id = intval($_GET['id']);

//retrieve  movie details
$movie_manager = MovieManager::getMovieManager();
$movie = $movie_manager->view_movie($id);

//handle errors
if(!$movie){
    $message = "There was a problem displaying the movie.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

//if no error, display movie details

$view = new ViewMovie();
$view->display($movie);