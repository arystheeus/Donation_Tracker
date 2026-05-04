<?php
$drive = $_GET['drive'] ?? 'education';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBjorn Mission</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="header">
  <div class="site-name">fundBjorn.com</div>
</div>

<?php if ($drive == "education") { ?>

  <div class="hero">
    <img src="education.png">
    <h1>IMPROVE CHILDREN’S EDUCATION</h1>
  </div>

  <div class="mission-text">
    <p>Every child deserves education but lacks resources...</p>
  </div>

<?php } elseif ($drive == "feed") { ?>

  <div class="hero">
    <img src="hungry.png">
    <h1>FEED THE HUNGRY</h1>
  </div>

  <div class="mission-text">
    <p>Help provide meals for families in need...</p>
  </div>

<?php } elseif ($drive == "disaster") { ?>

  <div class="hero">
    <img src="disaster.png">
    <h1>DISASTER RESPONSE</h1>
  </div>

  <div class="mission-text">
    <p>Support victims of natural disasters...</p>
  </div>

<?php } ?>

<!-- NEXT STEP BUTTON -->
<div class="actions">
  <a href="donation.php?drive=<?php echo $drive; ?>" class="donate-now">
    Continue to Donation
  </a>
</div>

</body>
</html>