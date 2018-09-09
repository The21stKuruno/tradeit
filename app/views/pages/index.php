<?php require APPROOT . '/views/inc/header.php'; ?>
  <section class="showcase" style="background: url('<?php echo URLROOT; ?>/img/showcase.jpg') no-repeat center center;background-size: cover; height: 650px min-height: 445px; width: 100%; background-color: #fff; overflow: hidden; ">
    <div class="main container">
      <div class="header">
        <h1>Analyze Your Trades for Free.</h1>
        <h3>Goodbye Excel spreadsheets, hello Trade Journal.</h3>
        <p>Log your stock trades in the cloud, track your mistakes, test new strategies, and improve your trading.</p>
      </div>
      <form class="container" action="<?php echo URLROOT; ?>/users/signup" method="POST">
        <label for="username">Username</label>
        <input id="username" type="text" placeholder="Pick a username">
        <label for="email">Email Address</label>
        <input id="email" type="email" placeholder="you@example.com">
        <label for="password">Password</label>
        <input id="password" type="password" autocomplete="new-password" placeholder="Create a password">
        <label for="confirm-password">Confirm password</label>
        <input id="confirm-password" type="password" autocomplete="new-password" placeholder="Re-type password">
        <button class="btn-signup" type="submit">Sign up for Trade-it</button>
        <p class="terms">By clicking “Sign up for Trade-it”, you agree to our  <a href="#">terms of service</a> and <a href="#">privacy statement</a> . We’ll occasionally send you account related emails.</p>
      </form>
    </div>
  </section>
  <!-- End of Showcase -->
  <section class="container boxes section">
    <div class="education">
      <h3>Education</h3>
      <i class="fas fa-book fa-5x"></i>
      <p>Your first step begins here. Learn the right investing strategies so you can embark on your stock market journey.</p>
    </div>
    <div class="journal-trade">
      <h3>Journal Trade</h3>
      <i class="fas fa-chart-bar fa-5x"></i>
      <p>Log your stock trades in the cloud, track your mistakes, test new strategies, and improve your trading.</p>
    </div>
    <div class="education">
      <h3>Community</h3>
      <i class="fas fa-users fa-5x"></i>
      <p>Collaborate with your fellow stock market enthusiasts and win in the stock market together.</p>
    </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>