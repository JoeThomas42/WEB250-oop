<?php
require_once('../private/initialize.php');
$page_title = 'Sightings';
include(SHARED_PATH . '/public_header.php');
?>

<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>


<table>
  <tr>
    <th>Name</th>
    <th>Habitat</th>
    <th>Food</th>
    <th>Nest Placement</th>
    <th>Behavior</th>
    <th>Conservation</th>
    <th>Backyard Tips</th>
  </tr>

  <?php

  // Fetch all birds from the database
  // Prepare the SQL query to fetch all birds
  $sql = "SELECT * FROM birds";
  $result_set = $database->query($sql);

  // Check if the query was successful
  if(!$result_set) {
      die("Database query failed: " . $database->error);
  }

    // Iterate over each row in the result set
    while($row = $result_set->fetch_assoc()) {
      // Instantiate a Bird object with the fetched data
      $bird = new Bird($row);
    ?>
      <tr>
        <td><?php echo h($bird->common_name); ?></td>
        <td><?php echo h($bird->habitat); ?></td>
        <td><?php echo h($bird->food); ?></td>
        <td><?php echo h($bird->nest_placement); ?></td>
        <td><?php echo h($bird->behavior); ?></td>
        <td><?php echo h($bird->conservation()); ?></td>
        <td><?php echo h($bird->backyard_tips); ?></td>
      </tr>
  <?php
    } // End of while loop

    // Free the result set
    $result_set->free();
  ?>

</table>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
