<?php require APPROOT . '/views/inc/header.php'; ?>
<section class="signup-section container pages">
  <div class="form-two-row">
    <form class="first-row" action="<?php echo URLROOT; ?>/users/signup" method="POST">
      <h3>Create your personal account</h3>
      <label for="username">Username</label>
      <input type="text" id="username" value="" placeholder="Pick a username">
      <label for="email">Email address</label>
      <input id="email" type="email" placeholder="you@example.com">
      <label for="password">Password</label>
      <input id="password" type="password" autocomplete="new-password" placeholder="Create password">
      <label for="confirm-password">Confirm password</label>
      <input id="confirm-password" type="password" autocomplete="new-password" placeholder="Re-type password">
      <button class="btn">Sign up</button>
    </form>
    <div class="second-row">
      <p>Have an account? <a class="under-hover" href="<?php echo URLROOT; ?>/users/signin">Sign in to Trade-it</a>.</p>
    </div>
  </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>