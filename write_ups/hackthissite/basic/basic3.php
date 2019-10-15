<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Basic 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <?php
      require '/var/www/html/hack/bootimport.php';
    ?>
  </head>
  <body style="">
    <?php
      require '/var/www/html/hack/nav.php';
    ?>
    <div class="jumbotron jumbotron-fluid blog-header text-center bg-dark">
      <h1 style="color:white">Basic 3</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>You have a password box and are told that the sys admin uploaded a
         password file but has made a different mistake this time.</p>
      <h2>Solution</h2>
      <p>If you again look at the source of the page you will find a hidden
         input that links to a file called password.php.</p>
      <code>
        &lt;input type="hidden" name="file" value="password.php" /&gt;
      </code>
      <p>Go to the password.php file and there you will find the unhashed
         password.</p>
      <code>f9e7a635</code>
    </div>
  </body>
</html>
