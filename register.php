<?php
include 'views/app.php'
?>

<div class="row row-logo">
  <a href="index.php"><img class="img-responsive logo-part" src="img/logo-text-img.png" /></a>
</div>
<div class="row user-form form-register">
  <form class="form-horizontal" action="" method="POST">
  <!-- {{ csrf_field() }} -->
  <!-- ============ USERNAME ============ -->
  <div class="form-group">
    <label for="register-nickname" class="col-sm-3 control-label"><?php echo $Strings['Username']; ?></label>
    <div class="col-sm-9">
      <input id="register-nickname" class="form-control" type="text" name="username" required autofocus />
    </div>
  </div>
  <!-- ============ E-MAIL ============ -->
  <div class="form-group">
    <label for="register-email" class="col-sm-3 control-label"><?php echo $Strings['Email']; ?></label>
    <div class="col-sm-9">
      <input id="register-email" class="form-control" type="email" name="email" required />
    </div>
  </div>
  <!-- ============ PASSWORD ============ -->
  <div class="form-group">
    <label for="register-password" class="col-sm-3 control-label"><?php echo $Strings['Password']; ?></label>
    <div class="col-sm-9">
      <input id="register-password" class="form-control" type="password" name="password" required />
    </div>
  </div>
  <!-- ============ PASSWORD (REPEAT) ============ -->
  <div class="form-group">
    <label for="register-passwordrepeat" class="col-sm-3 control-label"><?php echo $Strings['PasswordRepeat']; ?></label>
    <div class="col-sm-9">
      <input id="register-passwordrepeat" class="form-control" type="password" name="password_confirmation" required />
    </div>
  </div>
  <!-- ============ USER FIRST NAME ============ -->
  <div class="form-group">
    <label for="register-firstname" class="col-sm-3 control-label"><?php echo $Strings['FirstName']; ?></label>
    <div class="col-sm-9">
      <input id="register-firstname" class="form-control" type="text" name="first_name" required />
    </div>
  </div>
  <!-- ============ USER LAST NAME ============ -->
  <div class="form-group">
    <label for="register-lastname" class="col-sm-3 control-label"><?php echo $Strings['LastName']; ?></label>
    <div class="col-sm-9">
      <input id="register-lastname" class="form-control" type="text" name="last_name" />
    </div>
  </div>
  <!-- ============ CHOOSE LANG ============ -->
  <div class="form-group">
    <label for="register-languageselect" class="col-sm-3 control-label lang-select-class-test"><?php echo $Strings['AppLang']; ?></label>
    <div class="col-sm-9">
  		<select name="user_lang" required>
        <option value="pl">Polski (PL)</option>
        <option value="en">English (EN-US)</option>
      </select>
    </div>
  </div>
  <!-- ============ RULES ============ -->
  <div class="form-group">
  	<div class="col-sm-offset-3 col-sm-9">
  		<div class="checkbox">
  			<label><input type="checkbox" name="rules" required>&nbsp;<?php echo $Strings['AcceptRules']; ?></label>
  		</div>
  	</div>
  </div>
  <!-- ============ CAPTCHA ============ -->
  <div class="form-group">
  	<div class="col-sm-offset-3 col-sm-9">
  		<div class="g-recaptcha" data-sitekey="6LfT0kIUAAAAADZFCx-mVhr7btyjz-233sMatuRA" name="recaptcha"></div>
  	</div>
  </div>
  <!-- ============ REGISTER ============ -->
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-success"><?php echo $Strings['Register']; ?></button>
    </div>
  </div>
  <!-- @include('layouts.errors') -->
  <div class=form-group>
    <div class="alert alert-danger">
      <ul>
        <!-- //// W PRZYPADKU BŁĘDÓW WYŚWIETLIĆ WSZYSTKIE JAKIE WYSTĄPIŁY ////
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
        -->
        <li>{{ $error1 }}</li>
        <li>{{ $error2 }}</li>
      </ul>
    </div>
  </div>
  </form>
</div>

<script src="https://www.google.com/recaptcha/api.js"></script>

<?php PageEnd(); ?>
