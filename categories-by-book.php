<?php 
require_once("util-db.php"); 
require_once("categories-by-book.php");

$pageTitle = "Categories by Book";
include "view-header.php";
$categories = selectCategoriesByBook($_POST['bid']); 
include "view-categories-by-book.php";
include "view-footer.php";
?>
