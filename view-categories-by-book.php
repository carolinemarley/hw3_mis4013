<h1>Categories by Book</h1>
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
while ($category = $categories->fetch_assoc()) {
?>
  <tr>
    <td> <?php echo $category['book_id']?></td>
    <td> <?php echo $category['book_title']?></td>
    <td> <?php echo $category['book_publisher']?></td>
    <td> <?php echo $category['age_group']?></td>
    <td> <?php echo $category['category_code']?></td>
    <td> <?php echo $category['category_name']?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
