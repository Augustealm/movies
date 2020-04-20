<?php
//if (isset[$_GET])
    switch ($_GET['p'] ?? null) {
        case('add-category');
            include "templates\main\pages\add-category.php";
            break;
        case('add_movie');
            include "templates\main\pages\add-movie.php";
            break;
        case('all-movies');
            include "templates\main\pages\all-movies.php";
            break;
        case('delete-category');
            include "templates\main\pages\delete-category.php";
            break;
        case('home');
            include "templates\main\pages\home.php";
            break;
        case('search-movie');
            include "templates\main\pages\search-movie.php";
            break;
        default:
            include "templates/main/pages/home.php";
};

/*if (isset($_GET['pages'])) {
    case('/');
        include ('templates/'.ACTIVE_TEMPLATE.'/pages/all_movie.page.php');
        break;
    case('all');
        include ('templates/'.ACTIVE_TEMPLATE.'/pages/all_movie.page.php');
        break;
     case('search');
        include ('templates/'.ACTIVE_TEMPLATE.'/pages/search.page.php');
        break;
case('search');
    include ('templates/'.ACTIVE_TEMPLATE.'/pages/search.page.php');
    break;

}
*/