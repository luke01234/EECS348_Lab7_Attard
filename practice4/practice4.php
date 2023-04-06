<html>
<head>
    <link rel="stylesheet" href="style.css">
    <h1>EECS 348 LAB 7 PRACTICE 4</h1>
    <style>
        
    </style>
</head>
<body>
  <?php
    $size = $_POST["num"];

    echo "<table style='border: 2px solid black'>";

    for ($i = 0; $i <= $size; $i++) {
      echo "<tr style='border: 2px solid black'>";

      for ($j = 0; $j <= $size; $j++) {
        if ($i == 0 && $j == 0) {
          echo "<td style='border: 2px solid black'>0</td>";
        } elseif ($i == 0) {
          echo "<td style='border: 2px solid black'>$j</td>";
        } elseif ($j == 0) {
          echo "<td style='border: 2px solid black'>$i</td>";
        } else {
          echo "<td style='border: 2px solid black'>" . ($i * $j) . "</td>";
        }
      }

      echo "</tr>";
    }

    echo "</table>";
  ?>
</body>
</html>