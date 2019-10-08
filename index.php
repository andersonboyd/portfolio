<?php
  if(isset($_POST["submit"])){
    $to = "andersonswaimboyd@gmail.com";
    $from = $_POST["email"];
    $first = $_POST["firstName"];
    $last = $_POST["lastName"];
    $subject = "Your email";
    $subject2 = "Copy of your email";
    $message = $first." ".$last." wrote the following: "."\n\n".$_POST["message"];
    $message2 = "Here is a copy of your message ".$first."\n\n".$_POST["message"];

    $headers = "From: ".$from;
    $headers2 = "From: ".$to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);
    echo "Mail sent. Thank you for your message, ${first} ${last}. I will get back to you shortly!";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Full name no caps</title>
  <!-- test css/favicon links  
  <link rel="icon" type="image/x-icon" href="../portfolio/images/favicon.ico">
  <link rel="icon" type="text/css" href="../portfolio/assets/reset.css">
  <link rel="stylesheet" type="text/css" href="../portfolio/assets/style.css"> -->
  <!-- deployed css/favicon links -->
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <link rel="icon" type="text/css" href="/assets/reset.css">
  <link rel="stylesheet" type="text/css" href="/assets/style.css"> 
</head>

<body>
  <!-- mobile div is for mobile browsers that ignore overflow in body/html tags -->
  <div class="mobile">
    <nav id="navbar">
      <a href="https://www.linkedin.com/in/andersonswaimboyd">linkedin</a>
      <a href="https://github.com/andersonboyd">github</a>
    </nav>
    <div class="wrapper">
      <section class="section parallax static intro">
        <div id="wrap">
          <div id="myphoto"></div>
          <div id="me">
            <h1 id="greeting">Hi, I'm Anderson</h1>
            <p id="lede">
              <span class="txt-rotate" data-period="100" data-rotate='["I make MERN stacks.", 
                      "Native Texan with a background in journalism.", 
                      "HTML/CSS, JS/JQ, Node, Express, MySQL, MongoDB, React", 
                      "Photoshop, Illustrator, inDesign, inCopy, Premier"]'></span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
      </section>
      <section class="section parallax bg1"></section>
      <!-- still unsure whether this is necessary
        <section class="section parallax static about">
        <a name="about" id="about"><h2>about me</h2></a>
        <div id="graf">
          
        </div>
      </section> -->
      <section class="section parallax static portfolio">
        <a name="portfolio" id="portfolio">
          <h2>builds</h2>
        </a>
        <div id="work">
          <div class="build-box">
            <div id="build-photo-1"></div>
            <div id="build-info-1">
              <a href="http://myplantpal.herokuapp.com" target="_blank">
                <h3>Plant Pal</h3>
              </a>
              <p>Keep track of the plants in your garden! Made with MongoDB, React, Express and Node. <a href="github.com/andersonboyd/plantpal" target="_blank">Github Link</a></p>
            </div>
          </div>
          <div class="build-box">
            <div id="build-photo-2"></div>
            <div id="build-info-2">
                <a href="http://tradex-crypto.herokuapp.com" target="_blank">
                  <h3>TradeX</h3>
                </a>
              <p>Buy and sell mock cryptocurrency! Made with MySQL, Handlebars, Express and Node. <a href="github.com/andersonboyd/tradex" target="_blank">Github Link</a></p>
            </div>
          </div>
          <div class="build-box">
            <div id="build-photo-3"></div>
            <div id="build-info-3">
                <a href="https://fivethirtyscrape.herokuapp.com" target="_blank">
                  <h3>FiveThirtyScrape</h3>
                </a>
              <p>Scrape fivethirtyeight.com for new articles! Made with MongoDB, Axios, Cheerio and Express. <a href="github.com/andersonboyd/mongoscraper" target="_blank">Github Link</a></p>
            </div>
          </div>
          <div class="build-box">
            <div id="build-photo-4"></div>
            <div id="build-info-4">
                <a href="https://fivethirtyscrape.herokuapp.com" target="_blank">
                  <h3>Clicky Game</h3>
                </a>
              <p>Click the images once, and only once, to win! Made with React. <a href="github.com/andersonboyd/clickygame" target="_blank">Github Link</a></p>
            </div>
          </div>
          <div class="build-box">
            <div id="build-photo-5"></div>
            <div id="build-info-5">
                <a href="https://andersonboyd.github.io/TriviaGame" target="_blank"><h3>Baseball Trivia</h3></a>
              <p>Test your baseball knowledge with this game! <a href="github.com/andersonboyd/TriviaGame" target="_blank">Github Link</a></p>
            </div>
          </div>
          <div class="build-box">
            <div id="build-photo-6"></div>
            <div id="build-info-6">
                <a href="https://andersonboyd.github.io/GiphyAPISearcher" target="_blank"><h3>Gif Searcher</h3></a>
              <p>Search for your favorite gifs using the Giphy API! <a href="github.com/andersonboyd/GiphyAPISearcher" target="_blank">Github Link</a></p>
            </div>
          </div>
      </section>
      <section class="section parallax bg2"></section>
      <section class="section parallax static contact">
        <a name="contact" id="contact">
          <h2>contact me at andersonswaimboyd@gmail.com</h2>
        </a>
        <div class="contactForm">
          <form action="" method="POST">
            <div class="form-group">
              <label for="firstName">First name: </label>
              <input type="text" name="firstName" id="firstName">
            </div>
            <div class="form-group">
              <label for="lastName">Last name: </label>
              <input type="text" name="lastName" id="lastName">
            </div>
            <div class="form-group">
              <label for="emailAddr">Email: </label>
              <input type="email" name="email" id="emailAddr" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="message">Please leave your message here: </label>
              <textarea type="text" name="message" id="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </section>
      <section class="section parallax bg3"></section>
      <!-- <section class="section parallax bg4"></section> -->
    </div>
  <!-- <footer class="footer"></footer> -->
  </div>
  <script>
    var TxtRotate = function (el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 1000;
      this.txt = "";
      this.tick();
      this.isDeleting = false;
    };
    TxtRotate.prototype.tick = function () {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];
      if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      }
      this.el.innerHTML = "<span class=\"wrap\">" + this.txt + "</span>";
      var that = this;
      var delta = 300 - Math.random() * 100;
      if (this.isDeleting) { delta /= 2; }
      if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
      } else if (this.isDeleting && this.txt === "") {
        this.isDeleting = false;
        this.loopNum++;
        delta = 100;
      }
      setTimeout(function () {
        that.tick();
      }, delta);
    };
    window.onload = function () {
      var elements = document.getElementsByClassName("txt-rotate");
      for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute("data-rotate");
        var period = elements[i].getAttribute("data-period");
        if (toRotate) {
          new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
      }
      // INJECT CSS
      var css = document.createElement("style");
      css.type = "text/css";
      css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
      document.body.appendChild(css);
    };

    window.onscroll = function () { stickyNav() };
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function stickyNav() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
      }
      else {
        navbar.classList.remove("sticky");
      }
    };
  </script>
</body>

</html>