<?php require APPROOT . '/views/inc/header.php'; ?>
<section class="about container pages">  
  <h1><?php echo $data['title']; ?></h1>
  <p><?php echo $data['description']; ?></p>
  <p id="version">Version: <strong><?php echo APPVERSION; ?></strong></p>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>