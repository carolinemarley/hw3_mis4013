<h1>Books</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Publisher</th>
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
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
