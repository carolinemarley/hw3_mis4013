<?php
require_once("util-db.php");
require_once("model-authors-chart.php");

$pageTitle = "Authors Chart";

// Fetch authors data before including the header or any views
$authors = selectAuthors();

// Now, include the header, which can safely access the $authors variable
include "view-header.php";

// Include the page content
include "page.php";

// Include the footer
include "view-footer.php";
?>
