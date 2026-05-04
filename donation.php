<?php
$drive = $_GET['drive'] ?? 'education';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Donation Options</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

<div class="container">
  <p class="label">OPTION</p>

  <div class="card">
    <h2>Select donation type</h2>

    <a class="btn" href="money.php?drive=<?php echo $drive; ?>">
      MONEY
    </a>

    <a class="btn" href="item.php?drive=<?php echo $drive; ?>">
      ITEMS
    </a>

  </div>
</div>

</body>
</html>