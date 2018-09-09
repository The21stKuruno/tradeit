<?php require APPROOT . '/views/inc/header.php'; ?>
<section class="enter container pages">

  <form action="<?php echo URLROOT; ?>/users/signup" class="form-signin" method="POST">  
    <a class="logo-signin" href="<?php echo URLROOT; ?>">
      <i class="fas fa-chart-line"></i>
      <h1>Trade-it</h1>
    </a>
    <h3>Create your personal account</h3>
    <label for="username">Username</label>
    <input type="text" id="username" value=""  placeholder="Pick username">
    <label for="email">Email address</label>
    <input type="email" id="email"  placeholder="you@example.com" value="">
    <label for="password">Password</label>
    </div>
    <input id="password" type="password" autocomplete="new-password"  placeholder="Create password">
    <label for="confirm-password">Confirm password</label>
    <input id="confirm-password" type="password" autocomplete="new-password" placeholder="Re-type password">
    <button class="btn-signin">Create an account</button>
    <p class="terms">By clicking “Create an account”, you agree to our  <a href="#">terms of service</a> and <a href="#">privacy statement</a> . We’ll occasionally send you account related emails.</p>
  </form>
  <div class="new-to-trade-it">
    <p>Have an account? <a href="<?php echo URLROOT; ?>/users/signin">Sign in</a>.</p>
  </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>