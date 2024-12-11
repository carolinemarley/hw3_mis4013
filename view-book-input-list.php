<select class="form-select" id = "bTitle" name = "bTitle">
<?php
while ($bookItem = $bookList->fetch_assoc()) {
  ?>
   <option value="<?php echo $bookItem['book_title'];?>"><?php echo $bookItem['book_title'];?></option>
  <?php
}
?>
</select>
