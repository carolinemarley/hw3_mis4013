<h1>Authors Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  // Start PHP block to fetch authors and build data
  <?php
  $authors = selectAuthors();
  $data = [];
  $labels = [];
  while ($author = $authors->fetch_assoc()) {
    $data[] = $author['num_categories'];
    $labels[] = $author['author_name'];
  }
  ?>

  // Create a new chart using the processed PHP arrays
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
        data: <?php echo json_encode($data); ?>,
      }],
      labels: <?php echo json_encode($labels); ?>,
    },
  });
</script>
