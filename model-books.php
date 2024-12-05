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

function insertBook($bTitle, $bPublisher) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("INSERT INTO `book` (`book_title`, `book_publisher`) VALUES (?, ?)");
    $stmt->bind_param("ss", $bTitle, $bPublisher);
    $success = $stmt->execute(); 
    $result = $stmt->get_result(); 
    $conn->close(); 
    return $success; 
  } catch (Exception $e){
      $conn->close();
    throw $e;
  }
}

function updateBook($bTitle, $bPublisher, $bid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("UPDATE `book` set `book_title` = ?, `book_publisher` =?  WHERE book_id = ?");
    $stmt->bind_param("ssi", $bName, $bPublisher, $bid);
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


