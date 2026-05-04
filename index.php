<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>fundBjorn.com</title>

  <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;500;700;800&family=Caudex:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
<a href="http://localhost/Final_Project/index.html" class="header-logo">fundBjorn.com</a>

    <div class="search-bar">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke-width="2">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
      </svg>

      <input type="text" placeholder="Search">
    </div>
  </header>

  <!-- MAIN -->
  <section class="main">
    <div class="mainbg"></div>
    <img class="mainImage" src="image.jpg" alt="Main Image">

    <div class="mainContent">
      <h1>Make an Impact</h1>
      <p>"In a world that has neglected these communities,<br>you can make real change."</p>
    </div>
  </section>

  <!-- MISSION -->
  <section class="mission">
    <div class="missionText">
      <h2>We change lives.</h2>
    </div>

    <p>
      "As students committed for social change, we turn generosity into action;
      bringing people and families together to create real impact."
    </p>

    <div class="missionCards">Make your Change:</div>
  </section>

  <!-- CARDS (NOW PHP ROUTING READY) -->
  <section class="cards-section">

    <a class="card1" href="drive.php?drive=education" aria-label="Educate Children">
      <div class="cardImage"></div>
      <div class="cardText">
        <span class="cardLabel">educate</span>
        <span class="cardTitle">children</span>
      </div>
      <span class="cardHint">click to learn more</span>
    </a>

    <a class="card2" href="drive.php?drive=disaster" aria-label="Disaster Response">
      <div class="cardImage"></div>
      <div class="cardText">
        <span class="cardLabel">disaster</span>
        <span class="cardTitle">response</span>
      </div>
      <span class="cardHint">click to learn more</span>
    </a>

    <a class="card3" href="drive.php?drive=feed" aria-label="Feed the Hungry">
      <div class="cardImage"></div>
      <div class="cardText">
        <span class="cardLabel">feed the</span>
        <span class="cardTitle">hungry</span>
      </div>
      <span class="cardHint">click to learn more</span>
    </a>

  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footerGrid">
      <div class="footerColm">
        <a href="#">About fundBjorn.com</a>
        <a href="#">fundBjorn Company</a>
      </div>

      <div class="footerColm">
        <a href="#">Campaigns</a>
        <a href="#">Terms and Conditions</a>
      </div>

      <div class="footerColm">
        <a href="#">Cookie Policy and Settings</a>
        <a href="#">Privacy Rights</a>
      </div>
    </div>

    <div class="footerSocials">
      <a href="#">
        <div class="socialIcon">IG</div>
        fundBjorn.ph
      </a>

      <a href="#">
        <div class="socialIcon">FB</div>
        fundBjorn.ph
      </a>
    </div>
  </footer>

</body>
</html>