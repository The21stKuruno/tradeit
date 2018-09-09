<?php require APPROOT . '/views/inc/header.php'; ?>
  <section class="showcase" style="background: url('<?php echo URLROOT; ?>/img/showcase.jpg') no-repeat center center;background-size: cover; height: 650px min-height: 445px; width: 100%; background-color: #fff; overflow: hidden; ">
    <div class="main container">
      <div class="header">
        <h1>Analyze Your Trades for Free.</h1>
        <h3>Goodbye Excel spreadsheets, hello Trade Journal.</h3>
        <p>Log your stock trades in the cloud, track your mistakes, test new strategies, and improve your trading.</p>
      </div>
      <form class="container" action="" >
        <label for="username">Username</label>
        <input id="username" type="text" placeholder="Pick a username">
        <label for="email">Email</label>
        <input id="email" type="email" placeholder="you@example.com">
        <label for="password">Password</label>
        <input type="password" autocomplete="new-password" placeholder="Create a password">
        <p id="pass-warning">Use at least one letter, one numeral, and seven characters.</p>
        <button class="btn btn-signup" type="submit">Sign up for Trade-it</button>
        <p>By clicking “Sign up for Trade-it”, you agree to our  <a href="#">terms of service</a> and <a href="#">privacy statement</a> . We’ll occasionally send you account related emails.</p>
      </form>
    </div>
  </section>
<?php require APPROOT . '/views/inc/footer.php'; ?>