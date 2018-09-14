<?php require APPROOT . '/views/inc/header.php'; ?>
<section class="signin-section container pages">
  <div class="form-two-row">    
    <div class="first-row">
      <h3>Sign in to Trade-it</h3>
      <form action="<?php echo URLROOT; ?>/users/signin" method="POST">  
        <label for="username">Username or email address</label>
        <input type="text" id="username" value="">
        <label for="password">Password</label>
        <input id="password" type="password" autocomplete="new-password">
        <button class="btn">Sign in</button>
      </form>
    </div>
    <div class="second-row">
      <p>New to Trade-it? <a href="<?php echo URLROOT; ?>/users/signup">Sign up now.</a>.</p>
    </div>
  </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>