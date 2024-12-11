<select class="form-select" id = "bPublisher" name = "bPublisher">
<?php
while ($bookItem = $bookList->fetch_assoc()) {
  ?>
   <option value="<?php echo $bookItem['book_publisher'];?>"><?php echo $bookItem['book_publisher'];?></option>
  <?php
}
?>
</select>
