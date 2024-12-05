<?php
function selectCategories(){
  try {
    $conn = get_db_connection(); 
    $stmt = $conn->prepare("Select category_id, age_group, category_code, category_name from `category`");
    $stmt ->execute(); 
    $result $stmt->get_result(); 
    $conn->close(); 
    return $result; 
  } catch (Exception $e) {
    $conn->close(); 
    throw $e;
  }
}
?>
