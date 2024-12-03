<?php
function selectBooks() {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT book_id, book_title, book_publisher FROM `book`");
    $stmt->execute(); 
    $result = $stmt->get_result();
    $conn->close(); 
    return $result; 
  } catch (Exception $e){
      $conn->close();
    throw $e;
  }
}
?>
