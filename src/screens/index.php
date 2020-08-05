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

  <body class="text-center">
    <form class="form-signin" method="get">
      <img
        class=""
        src="../assets/img/dal_cs_logo.png"
        alt="Company Logo"
        width="300"
        height="154"
      />
      <h1 class="h1 mb-3 font-weight-bold">DalTAMS</h1>
      <h4 class="h4 mb-3 font-weight-normal">Select your user type</h4>
      <a type="button" class="btn btn-lg btn-secondary btn-block font-weight-bold" href="login.php?user=stu">
        Student
      </a>
      <a type="button" class="btn btn-lg btn-secondary btn-block font-weight-bold" href="login.php?user=TA">
        TA
    </a>
      <a type="button" class="btn btn-lg btn-secondary btn-block font-weight-bold" href="login.php?user=prof">
        Professor
    </a>
      <a type="button" class="btn btn-lg btn-secondary btn-block font-weight-bold" href="login.php?user=office">
        Office
    </a>
    </form>
    <script>
      type = "text/javascript";
      src =
        "../styles/architectui-html-free/architectui-html-free/assets/scripts/main.js";
    </script>
  </body>
</html>
