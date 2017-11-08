<html>
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrapper">
    <div class="row page-404">
      <p>Wystąpił błąd 404 - wybrana przez Ciebie podstrona nie istnieje, ale, ale... :)</p>
      <h1>Gratulacje! Udało Ci się dojść do końca internetu.</h1>
      <h1>Otrzymujesz odznakę kota podróżnika, a teraz możesz kliknąć wstecz lub przejść do
       <a href="<?php echo home_url(); ?>">strony głównej</a></h1>
     </div>
     <div class="row page-404">
      <img class="404-image" src="<?php bloginfo('template_url'); ?>/images/cat-404.jpg" alt="">
    </div>
  </div>
</body>
</html>

