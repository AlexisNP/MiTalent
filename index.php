<!DOCTYPE html>
<html>
<head>
  <title>Mi Talent</title>
  <meta charset="utf-8" lang="en" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Alexis Pelé">
  <meta name="description" content="My Talent">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800|Poppins:400,500,700,800" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>
<body>

<header class="global">
  <aside>
    <nav class="burger-container">
      <i id="burger-menu-toggle" class="fas fa-bars"></i>
      <ul></ul>
    </nav>
    <ul class="social-links">
      <li><a href="#"><i class="fab fa-facebook"></i></a></li>
      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    </ul>
  </aside>
</header>
<div class="form-container">
  <form>
    <i id="search-bar-toggle" class="fas fa-search"></i>
  </form> 
</div>

<header>
  <nav class="site-nav">
    <ul>
      <li><a href="clients.php">CLIENTS</a></li>
      <li><a href="news.php">NEWS</a></li>
      <li><a href="contact.php">CONTACT</a></li>
      <li><a href="about.php">ABOUT</a></li>
    </ul>
    <a href="./" id="logo"><img src="./img/Logo.png"></a>
  </nav>
</header>

<section class="landing-gallery">
  <button class="cyan-btn">VIEW PROFILE</button>
  <figure>
    <figcaption>
      <h1>Georgina<br>Alson</h1>
      <p>YOUNG MODEL 2020</p>
    </figcaption>
    <button class="cyan-btn mobile-only">VIEW PROFILE</button>
    <button class="black-btn"><img src="./img/playicon.png"></button>
  </figure>
  <ul class="gallery-triggers">
    <li><a href="#">01</a></li>
    <li><a href="#">02</a></li>
    <li><a href="#">03</a></li>
    <li><a href="#">04</a></li>
  </ul>
</section>

<section class="profile">
  <header>
    <button data-highlight="actor"><h2>ACTOR</h2></button>
    <button data-highlight="musician"><h2>MUSICIAN</h2></button>
    <button data-highlight="comedian"><h2>COMEDIAN</h2></button>
    <button data-highlight="model"><h2>MODEL</h2></button>
  </header>

  <div class="profile-container">
    <figure class="item">
      <figcaption>
        <button>
          <span class="fa-stack">
            <i class="fas fa-circle fa-stack"></i>
            <i class="fas fa-location-arrow fa-stack-1x fa-inverse"></i>
          </span>
        </button>
        <h2>Keith Ruiz</h2>
        <h4>ACTOR</h4>
      </figcaption>
    </figure>

    <figure class="item">
      <figcaption>
        <button>
          <span class="fa-stack">
            <i class="fas fa-circle fa-stack"></i>
            <i class="fas fa-location-arrow fa-stack-1x fa-inverse"></i>
          </span>
        </button>
        <h2>Victoria Porter</h2>
        <h4>COMEDIAN</h4>
      </figcaption>
    </figure>

    <figure class="item">
      <figcaption>
        <button>
          <span class="fa-stack">
            <i class="fas fa-circle fa-stack"></i>
            <i class="fas fa-location-arrow fa-stack-1x fa-inverse"></i>
          </span>
        </button>
        <h2>Sofia Walker</h2>
        <h4>MUSICIAN</h4>
      </figcaption>
    </figure>

    <figure class="item">
      <figcaption>
        <button>
          <span class="fa-stack">
            <i class="fas fa-circle fa-stack"></i>
            <i class="fas fa-location-arrow fa-stack-1x fa-inverse"></i>
          </span>
        </button>
        <h2>Riley James</h2>
        <h4>MUSICIAN</h4>
      </figcaption>
    </figure>

    <figure class="item">
      <figcaption>
        <button>
          <span class="fa-stack">
            <i class="fas fa-circle fa-stack"></i>
            <i class="fas fa-location-arrow fa-stack-1x fa-inverse"></i>
          </span>
        </button>
        <h2>Nathan Walsh</h2>
        <h4>ACTOR</h4>
      </figcaption>
    </figure>

    <figure class="item">
      <figcaption>
        <button>
          <span class="fa-stack">
            <i class="fas fa-circle fa-stack"></i>
            <i class="fas fa-location-arrow fa-stack-1x fa-inverse"></i>
          </span>
        </button>
        <h2>Caitlin Read</h2>
        <h4>ACTOR</h4>
      </figcaption>
    </figure>

    <figure class="item">
      <figcaption>
        <button>
          <span class="fa-stack">
            <i class="fas fa-circle fa-stack"></i>
            <i class="fas fa-location-arrow fa-stack-1x fa-inverse"></i>
          </span>
        </button>
        <h2>Christopher King</h2>
        <h4>MUSICIAN</h4>
      </figcaption>
    </figure>

    <figure class="item">
      <figcaption>
        <button>
          <span class="fa-stack">
            <i class="fas fa-circle fa-stack"></i>
            <i class="fas fa-location-arrow fa-stack-1x fa-inverse"></i>
          </span>
        </button>
        <h2>Thomas Booth</h2>
        <h4>MODEL</h4>
      </figcaption>
    </figure>

    <figure class="item">
      <figcaption>
        <button>
          <span class="fa-stack">
            <i class="fas fa-circle fa-stack"></i>
            <i class="fas fa-location-arrow fa-stack-1x fa-inverse"></i>
          </span>
        </button>
        <h2>Paige Hart</h2>
        <h4>COMEDIAN</h4>
      </figcaption>
    </figure>

    <figure class="item">
      <figcaption>
        <button>
          <span class="fa-stack">
            <i class="fas fa-circle fa-stack"></i>
            <i class="fas fa-location-arrow fa-stack-1x fa-inverse"></i>
          </span>
        </button>
        <h2>Shayla Frost</h2>
        <h4>MODEL</h4>
      </figcaption>
    </figure>
  </div>

  <div class="flex-container">
    <a href="#">EXPLORE MORE</a>
  </div>
</section>

<section class="news">
  <h2>Latest News</h2>
  <header>
    <!-- List of "featured" articles -->
    <a href="#">
      <article>
        <figure></figure>
        <div>
          <h3>5 Reasons To Keep Your Beauty Salon Reservation</h3>
          <time>8 March, 2020</time>
        </div>
        <div class="clear"></div>
      </article>
    </a>
    <a href="#">
      <article>
        <figure></figure>
        <div>
          <h3>Benjamin Franklin Method Of Habit Formation</h3>
          <time>8 March, 2020</time>
        </div>
        <div class="clear"></div>
      </article>
    </a>
    <a href="#">
      <article>
        <figure></figure>
        <div>
          <h3>29 Motivational Quotes For Business And Other Work Environments</h3>
          <time>8 March, 2020</time>
        </div>
        <div class="clear"></div>
      </article>
    </a>
  </header>

  <main>

    <a href="#">
      <article>
        <aside>
          <div>
            <button><img src="./img/playicon.png"></button>
          </div>
          <h3>Use Your Reset Button To Change Your Vibration</h3>
          <time>8 March, 2020</time>
        </aside>
        <figure>
          <button class="trending-btn">TRENDING</button>
        </figure>
      </article>
    </a>

    <a href="#">
      <article>
        <figure>
          <div class="slider-dots">
            <span class="active"></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </figure>
        <figcaption>
          <h3>Motivation And Your Personal Vision : An Unbeatable Force</h3>
          <time>8 March, 2020</time>
        </figcaption>
      </article>
    </a>

    <a href="#">
      <article>
        <figure></figure>
        <figcaption>
          <h3>Dream Interpretation Common Symbols And Their Meanings</h3>
          <time>8 March, 2020</time>
        </figcaption>
      </article>
    </a>

    <a href="#">
      <article>
        <figure>
          <figcaption>
          </figcaption>
        </figure>
      </article>
    </a>

  </main>

</section>


<footer class="global">
  <div>
    <a href="./" id="logo"><img src="./img/Logo.png"></a>
    <aside>
      <a href="#">SIGN UP FOR OUR NEWSLETTER</a><i class="far fa-envelope"></i>
    </aside>
  </div>
  <hr>
  <div>
    <small>© 2018 MI Talent. Designed by Tranmautritam for Mass Impressions.</small>
    <ul>
      <li><a href="#"><i class="fab fa-facebook"></i></a></li>
      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    </ul>
  </div>
</footer>

<script src="js/apps.js"></script>

</body>
</html>