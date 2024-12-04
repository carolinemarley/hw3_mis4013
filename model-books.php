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

function insertBook($bName, $bPublisher) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("INSERT INTO `book` (`book_title`, `book_publisher`) VALUES (?, ?)");
    $stmt->bind_param("ss", $bName, $bPublisher);
    $success = $stmt->execute(); 
    $conn->close(); 
    return $success; 
  } catch (Exception $e){
      $conn->close();
    throw $e;
  }
}

function updateBook($bName, $bPublisher, $bid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("INSERT INTO `book` (`book_title`, `book_publisher`) VALUES (?, ?)");
    $stmt->bind_param("ss", $bName, $bPublisher);
    $success = $stmt->execute(); 
    $conn->close(); 
    return $success; 
  } catch (Exception $e){
      $conn->close();
    throw $e;
  }
}

function deleteBook($bid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("delete from book where book_id =?");
    $stmt->bind_param("i", $bid);
    $success = $stmt->execute(); 
    $conn->close(); 
    return $success; 
  } catch (Exception $e){
      $conn->close();
    throw $e;
  }
}
?>


