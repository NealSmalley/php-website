<?php
    include 'header.php';
?>
<h1>Exosuit station</h1>
<!DOCTYPE html> 
<html>
<head>
<title>My page!</title>
<?php include 'header.php';?><style><?php include 'CSS/Exosuit.css';?></style>
<div id="app"></div>
</head>
<body>
  <header>
    <nav>
<ul>
  <li><a href = "index.php">home</a></li>
  <li><a href = "Phineas and Ferb season 1.php">season 1</a>
      <ul>
          <li><a href = "eps/1-15.php">1-15</a></li>
          <li><a href = "eps/16-30.php">16-30</a></li>
          <li><a href = "eps/31-47.php">31-47</a></li>
      </ul>
  </li>
  <li class= "desktop"><a href = "Phineas and Ferb season 2.php.php">season 2</a>
    <ul>
      <li><a href = "eps/2(1-20).php">1-20</a></li>
      <li><a href = "eps/2(21-40).php">21-40</a></li>
      <li><a href = "eps/2(41-65).php">41-65</a></li>
    </ul>
  </li>
  <li class= "desktop"><a href = "Phineas and Ferb season 3.php">season 3</a>
    <ul>
      <li><a href = "eps/3(1-20).php">1-20</a></li>
      <li><a href = "eps/3(21-40).php">21-40</a></li>
      <li><a href = "eps/3(41-62).php">41-62</a></li>
    </ul>
  </li>
  <li class= "desktop"><a href = "Phineas and Ferb season 4.php">season 4</a>
    <ul>
      <li><a href = "eps/4(1-15).php">1-15</a></li>
      <li><a href = "eps/4(16-30).php">16-30</a></li>
      <li><a href = "eps/4(31-48).php">31-48</a></li>
    </ul>
  </li>
  <li>
    <!--<form action= "search.php" method= "Post"><input type="text" name="search" placeholder="Search"><button type= "submit" name="submit-search">Search</button></form>-->
    <head>
      <!--<link rel="stylesheet" href="pro search bar/css/style.css" />-->
      <style type="text/css">
        #searchBar {
            margin-top: 40px;
            border: 1px solid #000000;
            border-right: none;
            font-size: 16px;
            padding: 10px;
            outline: none;
            width:150px;
            -webkit-border-top-left-radius: 10px;
            -webkit-border-bottom-left-radius: 10px;
            -moz-border-radius-topleft: 10px;
            -moz-border-radius-bottomleft: 10px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
        #searchBtn {
            border: 1px solid #000000;
            font-size: 16px;
            padding: 10px;
            background:#f1d829;
            font-weight:bold;
            cursor: pointer;
            outline: none;
            -webkit-border-top-right-radius: 10px;
            -webkit-border-bottom-right-radius: 10px;
            -moz-border-radius-topright: 10px;
            -moz-border-radius-bottomright: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        #searchBtn:hover {
            background: #f6e049;
        }
        body {
            font-family: arial;
        }
        h3 {
            margin: 20px 0px 0px
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        </style>
        <script type = "text/javascript">
            function active(){
                var searchBar = document.getElementById('searchBar');

                if(searchBar.value == 'Search...'){
                    searchBar.value = ''
                    searchBar.placeholder = 'Search...'
                }
            }
            function inactive(){
                var searchBar = document.getElementById('searchBar');

                if(searchBar.value == ''){
                    searchBar.value = 'Search...'
                    searchBar.placeholder = ''
                }
            }
        </script>
    </head>
    <body>
        <form action="search.php" method="post">
          <input type="text" id="searchBar" name="search" placeholder="Search"><button type="submit" id="searchBtn" name="submit-search">Go</button>
        </form>
    </body>
  </li>
</ul>

    </nav>
  </header>
<!-- Slide Show -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {box-sizing: border-box}
  body {font-family: Verdana, sans-serif; margin:0}
  .mySlides {display: none}
  img {vertical-align: middle;}
  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }
  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }
  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  .active, .dot:hover {
    background-color: #717171;
  }
  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }
  @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
  }
  </style>
  </head>
  <body>
  
  <div class="slideshow-container">
  
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/prototype1.png" style="width:100%">
    <div class="text">Custom Covid-19 bane mask</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/folded prototype1.png" style="width:100%">
    <div class="Ice cream">Caption Two</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/latest prototype.png" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
  </div>
  
  <script>
  var slideIndex = 1;
  showSlides(slideIndex);
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
  </script>
  
  </body>


  <div class="features">
    <div class="item1"><img src="img/bane2.jpg" alt="Bane mask"></div>
    <!--<figcaption>Bane mask</figcaption>-->
    <div class="item2"><p>this is a testthis is a testthis is a testthis is a testthis is a testthis is a testthis is a testthis is a testthis is a testthis is a test</p></div>
    <div class="item3"><img src="img/vader.jpg" alt="Vader mask"></div>
    <!--<figcaption>Vader mask</figcaption>-->
    <div class="item4"><p>this is a testthis is a testthis is a testthis is a testthis is a testthis is a testthis is a testthis is a testthis is a testthis is a test</p></div>
    <div class="item5"><img src="img/bunny mask.png" alt="bunny mask"></div>
    <!--<figcaption>bunny mask</figcaption>-->
    <div class="item6"><p>this is a testthis is a testthis is a testthis is a testthis is a testthis is a testthis is a testthis is a testthis is a testthis is a test</p></div>
  </div>



  <section>triple-section</section>
  <footer>

    Neal Smalley
  </footer>
</body>
</html> 

<h2>All Projects:</h2>
<div class="aritcle-container">
    <?php
        $sql = "SELECT * FROM article";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
        
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                    echo "<div>
                        <h3>".$row['a_title']."</h3>
                        <p>".$row['a_text']."</p>
                        <p>".$row['a_date']."</p>
                        <p>".$row['a_author']."</p>
                    </div>";
            }
            
        }


    ?>
</div>


</body>