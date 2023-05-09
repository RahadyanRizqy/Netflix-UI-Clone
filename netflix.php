<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Clone by Rahadyan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- BORDER -->
<div class="header">
  <nav class="header-navbar">
    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Logonetflix.png" alt="netflix" class="netflix-logo">
    <div>
      <button class="lang-btn">English <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Chevron-icon-drop-down-menu-WHITE.png" alt=""></button>
      <button>Sign In</button>
    </div>
  </nav>

  <div class="header-content">
    <h1>Unlimited movies, TV shows and more</h1>
    <h3>Watch anywhere. Cancel anytime</h3>
    <p>Ready to watch? Enter your email to create or restart</p>
    <form action="./controller.php" class="email-register" method="POST">
      <input type="email" placeholder="rahadyanrizqy@mail.net" required>
      <button type="submit" name="regist-btn">Get Started</button>
    </form>
  </div>
</div>

<div class="main-features">
  <div class="row">
    <div class="text-col">
      <h2>Enjoy on your TV.</h2>
      <p>Watch on smart TVs, Playstation, Xbox, Chromecast, etc.</p>
    </div>
    <div class="img-col">
      <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/cards/v2.1/enjoyOnTv/en.png" alt="">
    </div>
  </div>
  
  <div class="row">
    <div class="img-col">
        <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/cards/v2.1/watchEverywhere/en.png" alt="">
    </div>
    <div class="text-col">
      <h2>Watch everywhere.</h2>
      <p>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</p>
    </div>
  </div>

  <div class="row">
    <div class="text-col">
      <h2>Create profiles for kids</h2>
      <p>Send kids on adventures with their favorite characters in a space made just for them—free with your membership..</p>
    </div>
    <div class="img-col">
      <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/cards/v2.1/kids/en.png" alt="">
    </div>
  </div>

  <div class="row">
    <div class="img-col">
      <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/cards/v2.1/download/en.png" alt="">
    </div>
    <div class="text-col">
      <h2>Download your shows to watch offline</h2>
      <p>Save your favorites easily and always have something to watch.</p>
    </div>
  </div>
</div>

<div class="faq">
  <h2>Frequently Asked Questions</h2>
  <ul class="accordion">
    <li>
      <input type="radio" name="accordion" id="first">
      <label for="first">What is Netflix?</label>
      <div class="content">
        <p>
          Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
        </p>
      </div>
    </li>
    <li>
      <input type="radio" name="accordion" id="second">
      <label for="second">How much does it cost?</label>
      <div class="content">
        <p>
          Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
        </p>
      </div>
    </li>
    <li>
      <input type="radio" name="accordion" id="third">
      <label for="third">Where can i watch</label>
      <div class="content">
        <p>
          Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
        </p>
      </div>
    </li>
    <li>
      <input type="radio" name="accordion" id="fourth">
      <label for="fourth">How do I cancel?</label>
      <div class="content">
        <p>
          Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
        </p>
      </div>
    </li>
  </ul>
  <small>Ready to start?</small>
  <form action="#" class="email-register">
    <input type="email" placeholder="rahadyanrizqy@mail.net" required>
    <button type="submit">Get Started</button>
  </form>
</div>
<!-- BORDER -->
</body>
</html>