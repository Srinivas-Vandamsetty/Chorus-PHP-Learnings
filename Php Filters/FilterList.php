<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  // Use the filter_list() function to list available PHP filters
  foreach (filter_list() as $filter_id => $filter_name) {
    echo '<tr><td>' . htmlspecialchars($filter_name) . '</td><td>' . filter_id($filter_name) . '</td></tr>';
  }
  ?>
</table>
