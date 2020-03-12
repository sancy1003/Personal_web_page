<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CHAN</title>
      <!-- <link href="/my/css/bootstrap.min.css" rel="stylesheet"> -->
      <link href="/my/css/bootstrap.css" rel="stylesheet">
      <link href="/my/css/my.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="/my/js/jquery-3.4.1.min.js"></script>
      <script src="/my/js/bootstrap.min.js"></script>
      <script src="/my/js/bootstrap.js"></script>
  </head>
  <body>

<!-- Navbar part start -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <a class="navbar-brand" href="/">Pental</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">Menu</span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Board</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <?php
            if(!$this->session->userdata('id'))
              echo("<a href='#loginModal' data-toggle='modal' class='btnChan btnChan-login my-2 my-sm-0'>Login</a>");
            else
              echo("<a href='/login/logout' class='btnChan btnChan-login my-2 my-sm-0'>Logout</a>");
          ?>
        </form>
      </div>
    </nav>
  <!-- Navbar part end -->

  <!-- Login part start -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content" style="width:350px; height:400px">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">LOGIN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="/login/check">
              <div class="form-inline" style="margin-bottom:10px">
                <input type="text" class="Login-form" name="id" id="id" placeholder="ID">
              </div>
              <div class="form-inline">
                <input type="password" class="Login-form" name="pw" id="pw" placeholder="Password">
              </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn_login" value="Login">
            <a href="#" rel="nofollow" data-type="fb" class="btn_login" style="background-color:#4064ad; text-align: left;">
              <div style="position: fixed; width: inherit; display: inline-block;"><i class="fa fa-facebook-f" style="margin-left: 20px; margin-right:35px"></i></div>
              <div style="position: relative; width: inherit; display: inline-block; text-align: center;">Login with facebook</div></a>
              <div style="width: 100%; text-align: center; font-size:14px; margin-top:16px">Dont have an account? <a href="#" style="color:#ec3939">sign up</a></div>
          </div>
         </form>
        </div>
      </div>
    </div>
  <!-- Login part end -->
