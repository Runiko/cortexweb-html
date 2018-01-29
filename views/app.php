<?php
/* If you want to test translations, just
* replace "en" by two-letters code of language
*/
include 'strings-en.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    <?php
      /* Saving value from arry to variable */
      $PageLink = $_SERVER['SCRIPT_NAME'];

      switch ($PageLink) {
        case '/cortexweb-html/index.php':
          echo $Strings['TitleHome'];
          break;
        case '/cortexweb-html/404.php':
          echo $Strings['Title404'];
          break;
        case '/cortexweb-html/about.php':
          echo $Strings['TitleAbout'];
          break;
        case '/cortexweb-html/download.php':
          echo $Strings['TitleDownload'];
          break;
        case '/cortexweb-html/login.php':
          echo $Strings['TitleLogin'];
          break;
        case '/cortexweb-html/register.php':
          echo $Strings['TitleRegister'];
          break;
        case '/cortexweb-html/user-dashboard.php':
          echo $Strings['TitleUserDashboard'];
          break;
        case '/cortexweb-html/admin-dashboard.php':
          echo $Strings['TitleAdminDashboard'];
          break;
        default:
          echo 'ERROR - CHECK strings-en.php';
          break;
      }
    ?>
  </title>

  <!-- Styles -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/website.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
  <?php
    if($PageLink == '/cortexweb-html/index.php' || $PageLink == '/cortexweb-html/404.php') {
      echo '<!-- NAVBAR ISN\'T ON THESE TWO PAGES -->';
    }
    elseif ($PageLink == '/cortexweb-html/user-dashboard.php' || $PageLink == '/cortexweb-html/admin-dashboard.php') {
      echo '
      <!-- //// NAVBAR //// -->
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">

          <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          <!-- Branding Image -->
            <a class="navbar-brand" href="index.php">Cortex for Web</a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">&nbsp;</ul>

          <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  '.$Strings["UserWelcome"].', user->first_name (user->username) <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a class="dropdown-item" href="user-configurations-new.php">'.$Strings["CreateNewConfiguration"].'</a>
                    <a class="dropdown-item" href="user-configurations-browse.php">'.$Strings["BrowseSavedConfigurations"].'</a>
                    <a class="dropdown-item" href="user-configurations-explore.php">'.$Strings["ExploreConfigurations"].'</a>
                    <div role="separator" class="divider"></div>
                    <a class="dropdown-item" href="changelog.php">'.$Strings["Changelog"].'</a>
                    <a class="dropdown-item" href="logout" onclick="event.preventDefault(); document.getElementById(\'logout-form\').submit();">'.$Strings["UserLogout"].'</a>
                    <form id="logout-form" action="{{ route(\'logout\') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- //// NAVBAR //// -->';
    }
    else {
      echo '
      <!-- //// NAVBAR //// -->
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">

          <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          <!-- Branding Image -->
            <a class="navbar-brand" href="index.php">Cortex for Web</a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">&nbsp;</ul>

            <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                  <li><a href="register.php">Zarejestruj się</a></li>
                  <li><a href="login.php">Zaloguj się</a></li>
              </ul>
          </div>
        </div>
      </nav>
      <!-- //// NAVBAR //// -->';
    }
  ?>

<div class="container">

<?php

/* On all pages, only after content */
function PageEnd() {
  global $Strings;
  echo '
</div>

  <footer>
    <div class="container main-copyright">
      <div class="row">'.$Strings["AppVersion"].' - {{APP_VERSION}}</div>
      <div class="row">'.$Strings["Copyright"].' &copy; 2017 - 2018 Imparakeet</div>
      <div class="row"><a href="license.php">'.$Strings["LicenseToS"].'</a></div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- <script src="js/app.js"></script> -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/moment-with-locales.min.js"></script>
  <script src="https://vuejs.org/js/vue.js"></script>
  <!-- <script src="https://vuejs.org/js/vue.min.js></script> -->

  <!-- Optional scripts -->
  <!-- //// TYLKO DLA TESTÓW HTML //// -->
  <script src="js/html.js"></script>
  </body>
  </html>';
}

?>
