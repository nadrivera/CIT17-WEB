<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise7</title>
</head>
<style>
  .table {
  width:70%;
  background-color:yellow;
  border-spacing: 12px;
  border: 6px solid; }
</style>
<body>
<?php
echo '<table class="table">';
  for ( $counter1 = 1; $counter1 <= 7; $counter1++ ) {
  echo "<tr>";
    for ( $counter2 = 1; $counter2 <= 7; $counter2++)
      echo "<td>".$counter1 * $counter2."</td>";			
  echo "</tr>";
  }
echo '</table>';
?>

</body>
</html>