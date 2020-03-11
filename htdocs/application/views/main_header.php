<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CHAN</title>
      <!-- <link href="/my/css/bootstrap.min.css" rel="stylesheet"> -->
      <link href="/my/css/bootstrap.css" rel="stylesheet">
      <link href="/my/css/my.css" rel="stylesheet">
      <script src="/my/js/jquery-3.4.1.min.js"></script>
      <script src="/my/js/bootstrap.min.js"></script>
      <script src="/my/js/bootstrap.js"></script>
  </head>
  <body>

<!-- Navbar part start -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <a class="navbar-brand" href="/">Chan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
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
        <div class="modal-content">
          <div class="modal-header mycolor1">
            <h5 class="modal-title" id="loginModalLabel">LOGIN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="/login/check">
              <div class="form-inline" style="margin-bottom:10px">
                아이디 :&nbsp;&nbsp;<input type="text" class="form-control" name="id" id="id">
              </div>
              <div class="form-inline">
                암&nbsp;&nbsp;&nbsp;&nbsp;호 :&nbsp;&nbsp;<input type="password" class="form-control" size="19" name="pw" id="pw">
              </div>
          </div>
          <div class="modal-footer mycolor1">
            <input type="submit" class="btn btn-light" value="로그인">
            <button type="button" class="btn btn-light" data-dismiss="modal">닫기</button>
          </div>
         </form>
        </div>
      </div>
    </div>
  <!-- Login part end -->
