<?php require APPROOT . '/views/inc/header.php'; ?>
<section class="enter container pages">

  <form action="<?php echo URLROOT; ?>/users/signin" class="form-signin" method="POST">  
    <a class="logo-signin" href="<?php echo URLROOT; ?>">
      <i class="fas fa-chart-line"></i>
      <h1>Trade-it</h1>
    </a>
    <h3>Sign in to Trade-it</h3>
    <label for="username">Username or email address</label>
    <input type="text" id="username" value="">
    <div class="arrange">
      <label for="password">Password</label>
      <a href="#" class="forgot-password">Forgot password?</a>
    </div>
    <input id="password" type="password" autocomplete="new-password">
    <button class="btn-signin">Sign in</button>
  </form>
  <div class="new-to-trade-it">
    <p>New to Trade-it? <a href="<?php echo URLROOT; ?>/users/signup">Create an account</a>.</p>
  </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>