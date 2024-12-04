<?php
function selectCategoriesByBook($bid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT b.book_id, book_publisher, book_title, age_group, category_code, category_name FROM book b join category c on c.book_id where c.category_id = ?");
    $stmt->bind_param("i", $bid);
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
