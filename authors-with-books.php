<?php
require_once("util-db.php");
require_once("model-authors-with-books.php"); 

$pageTitle = "Authors with Books";
include "view-header.php";
$authors = selectAuthors();
include "view-authors-with-books.php";
include "view-footer.php";
?>
