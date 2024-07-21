<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <?php require_once 'head.php';?>
</head>

<body>
  <div class="container-fluid">
  <?php require_once 'navbar.php';?>
    <section>
        <h1>My Product:</h1>
        <ul>
            <li><?php echo $product->getTitle(); ?></li>
            <li><?php echo $product->getDescription(); ?></li>
            <li><?php echo $product->getPrice(); ?></li>
            <li><?php echo $product->getSku(); ?></li>
            <li><?php echo $product->getImage(); ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>

    <?php require_once 'footer.php';?>
  </div>
</body>

</html>
