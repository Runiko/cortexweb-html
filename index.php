<?php
/* Including application schema */
include 'views/app.php'

/* Below this closing tag must be content */
?>

<div class="row row-logo">
  <img src="img/logo-text-img.png" class="img-responsive logo-part" alt="Logo" />
</div>
<div class="row row-buttons"><div class="col-md-4 col-md-offset-4"><a href="register.php" class="btn btn-default btn-lg btn-begins"><?php echo $Strings['Register']; ?></a></div></div>
<div class="row row-buttons"><div class="col-md-4 col-md-offset-4"><a href="login.php" class="btn btn-default btn-lg btn-begins"><?php echo $Strings['Login']; ?></a></div></div>
<div class="row row-buttons"><div class="col-md-4 col-md-offset-4"><a href="download.php" class="btn btn-default btn-lg btn-begins"><?php echo $Strings['Download']; ?></a></div></div>
<div class="row row-buttons"><div class="col-md-4 col-md-offset-4"><a href="about.php" class="btn btn-default btn-lg btn-begins"><?php echo $Strings['AboutApp']; ?></a></div></div>
<div class="row row-buttons"><div class="col-md-4 col-md-offset-4"><a href="donate.php" class="btn btn-default btn-lg btn-begins" target="_blank"><?php echo $Strings['Donate']; ?></a></div></div>

<?php PageEnd(); ?>
