<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <?php require_once 'head.php';?>
</head>

<body>
  <div class="container-fluid">
  <?php require_once 'navbar.php';?>
    <section>
        <h1>Contact Us</h1>
        <div>
          for more info, please contact us at: <br>
          email: <?=$email?> <br>
          phone: <?=$phone?> <br>
        </div>
        <p>
            <a href="<?php echo $routeToProduct ?>">Check the first product</a>
        </p>
    <section>
    <?php require_once 'footer.php';?>    
  </div>
</body>

</html>
