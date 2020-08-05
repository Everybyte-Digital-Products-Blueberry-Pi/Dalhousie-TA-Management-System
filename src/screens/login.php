<!-- This is a login page. Please put in the login code by Nh and Ab-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
      DALTAMS - Dalhousie Computer Science.
    </title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Build whatever layout you need with our Architect framework."
    />
    <meta name="msapplication-tap-highlight" content="no" />
    <!--
  =========================================================
  * ArchitectUI HTML Theme Dashboard - v1.0.0
  =========================================================
  * Product Page: https://dashboardpack.com
  * Copyright 2019 DashboardPack (https://dashboardpack.com)
  * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
  =========================================================
  * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
    <link
      href="../styles/architectui-html-free/architectui-html-free/main.css"
      rel="stylesheet"
    />
    <style>
      .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
      }
      body {
        height: 100%;
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-bottom: 80px;
      }
      html, body {
        margin: 0;
        height: 100%;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }

    </style>
  </head>
  <?php
  $user = $_GET['user'];
  ?>
  <body class="text-center">
    <form class="form-signin">
      <img
        class=""
        src="../assets/img/dal_cs_logo.png"
        alt="Company Logo"
        width="300"
        height="154"
      />
      <h1 class="h1 mb-3 font-weight-bold">DalTAMS</h1>
      <?php
      if($user == "stu" || $user == "TA")
      {
        echo '<label for="inputEmail" class="sr-only">Net ID</label>
        <input
          type="email"
          id="inputEmail"
          class="form-control"
          placeholder="NetID"
          required=""
          autofocus=""
        />';
      }
      else if($user == "prof" || $user == "office")
      {
        echo '<label for="inputEmail" class="sr-only">Username</label>
        <input
          type="text"
          id="inputUsername"
          class="form-control"
          placeholder="Username"
          required=""
          autofocus=""
        />';
      }
      ?>
      <label for="inputPassword" class="sr-only">Password</label>
      <input
        type="password"
        id="inputPassword"
        class="form-control"
        placeholder="Password"
        required=""
      />
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" /> Remember me
        </label>
      </div>
      <?php
      if($user == "stu")
      {
        echo '<a class="btn btn-lg btn-primary btn-block" href="Prof.html">
        Sign in
      </a>
      <a class="btn btn-lg btn-primary btn-block" href="jobs.html">
        Register
      </button>';
      }
      else if($user=="prof")
      {
        echo '<a class="btn btn-lg btn-primary btn-block" href="Prof.html">
        Sign in
      </a>
      <a class="btn btn-lg btn-primary btn-block" href="Prof.html">
        Register
      </button>';
      }
      else if($user=="TA")
      {
        echo '<a class="btn btn-lg btn-primary btn-block" href="TA.php">
        Sign in
      </a>
      <a class="btn btn-lg btn-primary btn-block" href="TA.php">
        Register
      </button>';
      }
      else {
        echo '<a class="btn btn-lg btn-primary btn-block" href="">
        Sign in
      </a>
      <a class="btn btn-lg btn-primary btn-block" href="">
        Register
      </button>';
      }
      ?>

    </form>
    <script>
      type = "text/javascript";
      src =
        "../styles/architectui-html-free/architectui-html-free/assets/scripts/main.js";
    </script>
  </body>
</html>
