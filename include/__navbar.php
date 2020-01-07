
		 <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed left" data-toggle="collapse" data-target="#menu">
        <span class="sr-only">Trình đơn</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Online store</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#search">
     <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="store.php">Store</a></li>
        <li ><a href="contact.php">Contact </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome , Guest <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="passwor-reset.php">Password reset</a></li>
            <li class="divider"></li>
            <li><a href="#">khác</a></li>
            <li class="divider"></li>
            <li><a href="#">Chắc một cái gì đó sẽ nằm ở đây thôi :))</a></li>
          </ul>
        </li>   
         <form class="navbar-form navbar-right hidden-sm hidden-md hidden-xs" role="search" action="/" method="GET">
      <div class="input-group">
      <input type="text" class="form-control" placeholder="Tìm kiếm..."/>
      <span class="input-group-btn">
        <button class="btn btn-success" type="button">Tìm kiếm</button>
      </span>
      </form>
      </ul> 
 <!--<ul class="nav navbar-nav navbar-right">
 <form class="navbar-form navbar-right hidden-sm hidden-md hidden-xs" role="search" action="/" method="GET">
      <div class="input-group">
      <input type="text" class="form-control" placeholder="Tìm kiếm..."/>
      <span class="input-group-btn">
        <button class="btn btn-success" type="button">Tìm kiếm</button>
      </span>
      </form>
 </ul>-->

    </div><!-- /.navbar-collapse #menu -->
    <div class="collapse navbar-collapse hidden-lg" id="search">
      <form class="mobile_search hidden-sm hidden-md hidden-lg" role="search" action="/" method="GET">
      <div class="input-group">
      <input type="text" class="form-control" placeholder="Tìm kiếm..."/>
      <span class="input-group-btn">
        <button class="btn btn-success" type="button">Tìm kiếm</button>
      </span>
</form>
    </div><!-- /.navbar-collapse #search -->
  </div><!-- /.container -->
</nav> 