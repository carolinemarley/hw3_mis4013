<div class = "row">
  <div class = "col">
    <h1>Books</h1>
  </div>
  <div class = "col-auto">
  <?php
include "view-books-newform.php";
?>
  </div>
</div>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Publisher</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($book = $books->fetch_assoc()) {
?>
  <tr>
    <td> <?php echo $book['book_id']?></td>
    <td> <?php echo $book['book_title']?></td>
    <td> <?php echo $book['book_publisher']?></td>
    <td>
          <form method = "post" action = "categories-by-book.php">
            <input type = "hidden" name = "bid" value = "<?php echo $book['book_id']?>">
      <button type="submit" class="btn btn-primary">Categories</button>
    </form>
    </td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
