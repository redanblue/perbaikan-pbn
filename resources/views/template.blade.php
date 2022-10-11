<!DOCTYPE html>
<html>
<head>
<title>PBN NI BOSS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/structure.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<header id="header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="{{ url('/') }}"><span>WI</span>DO</a> </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="{{ url('/') }}">Home</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jobs</a>
              <ul class="dropdown-menu" role="menu">
                <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Jobs Home</a> </li>
                <li><a href="#">Faq</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Article</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Standard Blog Layout</a></li>
                <li><a href="#">Post With Comments</a></li>
                <li><a href="#">Page:Right Sidebar</a></li>
              </ul>
            </li>
            <li><a href="#">Shortcodes</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <form id="searchForm">
      <input type="text" placeholder="Search...">
      <input type="submit" value="">
    </form>
  </div>
</header>
<body>
    @yield('konten')
</body>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer_inner">
          <p class="pull-left">Copyright &copy; 2022</p>
          <!-- <p class="pull-right">Developed By WpFreeware</p> -->
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>