<?php
require_once("util-db.php");
require_once("model-authors-chart.php"); 

$pageTitle = "Authors Chart";
include "view-header.php";
$authors = selectAuthors();
include "page.php";
include "view-footer.php";
?>
