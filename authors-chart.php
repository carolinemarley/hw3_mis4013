<?php
require_once("util-db.php");              // For DB connection
require_once("model-authors-chart.php");   // For the selectAuthors() function

$pageTitle = "Authors Chart";              // Set the page title
include "view-header.php";                 // Include the header

$authors = selectAuthors();               // Now you can call selectAuthors()

include "page.php";                       // Include the main content
include "view-footer.php";                // Include the footer
?>

