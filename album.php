<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.responsive {
    width: 100%;
    height: auto;
}
</style>  
<title>Zama&amp;Lele | Album</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_24.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/styleZama.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/uCarousel.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(document)
    .ready(function () {
    $('.gallery')
        ._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: false,
        nextBu: false,
        playBu: false,
        duration: 700,
        preset: 'fade',
        pagination: $('.img-pags')
            .uCarousel({
            show: 3,
            shift: 0,
            rows: 1
        }),
        pagNums: false,
        slideshow: 7000,
        numStatus: true,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
})
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="sub-pages">
  <header>
    <h1><a href="index.html"><img src="/zama_and_lele/images/logo.png" alt=""></a></h1>
    <nav>
      <ul class="menu">
        <li><a href="index.php">about</a></li>
        <li><a href="wedding.html">wedding</a></li>
        <li class="current"><a href="album.html">album</a></li>
        <li><a href="links.html">links</a></li>
        <li><a href="wishes.html">your wishes</a></li>
        <li><a href="contacts.php">contacts</a></li>
      </ul>
    </nav>
  </header>
</div> 


<!--==============================content================================-->
<section id="content">
  <div class="container_24">
    <div class="grid_24">
      <h4 class="top-1"><strong>Our</strong> photo album:</h4>
    </div>
    <div class="grid_19">
      <div id="slide">
        <div class="gallery">
          <ul class="items">
            <li><img src="/wedding/images/images/east1.jpg" alt=""></li>
            <li><img src="/wedding/images/images/east2.jpg" alt=""></li>
            <li><img src="/wedding/images/images/east3.jpg" alt=""></li>
            <li><img src="/wedding/images/images/east4.jpg" alt=""></li>
            <li><img src="/wedding/images/images/east5.jpg" alt=""></li>
            <li><img src="/wedding/images/images/lele1.jpg" alt=""></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="grid_5">
      <div class="pag">
        <div class="img-pags">
          <ul>
            <li><a href="#"><img src="/wedding/images/images/east1-small.jpg" alt=""><span></span></a></li>
            <li><a href="#"><img src="/wedding/images/images/east2-small.jpg" alt=""><span></span></a></li>
            <li><a href="#"><img src="/wedding/images/images/east3-small.jpg" alt=""><span></span></a></li>
            <li><a href="#"><img src="/wedding/images/images/east4-small.jpg" alt=""><span></span></a></li>
            <li><a href="#"><img src="/wedding/images/images/east5-small.jpg" alt=""><span></span></a></li>
            <li><a href="#"><img src="/wedding/images/images/lele1-small.jpg" alt=""><span></span></a></li>
          </ul>
        </div>
        <a href="#" class="gallery-button gallery-button-1" data-type="prevPage">&nbsp;</a> <a href="#" class="gallery-button gallery-button-2" data-type="nextPage">&nbsp;</a> </div>
    </div>
    <div class="clear"></div>
  </div>
</section>
<!--==============================footer=================================-->
<footer>
  <p><strong>© 2018 Zama &amp; Lele</strong><br>
    <a class="link">Designed by Zamikhaya Magogotya</a></p>
  <div class="soc-icons"><a href="#"><img src="images/icon-1.png" alt=""></a><a href="#"><img src="images/icon-2.png" alt=""></a><a href="#"><img src="images/icon-3.png" alt=""></a></div>
</footer>
</body>
</html>
