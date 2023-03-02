<?php

/*
 * Author: Katie Stinson
 * Date: 2/2/23
 * File: list_movie.php
 * Description: list all movies
 *
 */
require_once 'classes/movie_manager.class.php';
//pull search movie class
require_once 'classes/search_movie.class.php';

$movie_manager = MovieManager:: getMovieManager(); //create a MovieManager

//create super global function to retrieve what user types to display corresponding movies
$q = $_GET['query-terms'];

//retrieve movies
$movies = $movie_manager->search_movie($q);

//handle errors if the last query failed
if (!$movies) {
    //handle errors
    $message = "There was a problem displaying movies.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

// display all movies
//create new function, and display terms & movies
$view = new SearchMovie();
$view->display($q, $movies);