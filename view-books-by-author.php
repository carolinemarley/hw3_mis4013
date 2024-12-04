<h1>Books by Author</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Publisher</th>
        <th>Age Group</th>
        <th>Category Code</th>
        <th>Category Name</th>
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
    <td> <?php echo $book['age_group']?></td>
    <td> <?php echo $book['category_code']?></td>
    <td> <?php echo $book['category_name']?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
