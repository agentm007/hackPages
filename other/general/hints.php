<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Helpful Hints and commands</title>
    <meta charset="utf-8">
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

     <?php
      require '/var/www/html/hack/bootimport.php';
    ?>
  </head>
  <body>
    <?php
      require '/var/www/html/hack/nav.php'
    ?>
    <div class="jumbotron jumbotron-fluid blog-header text-center bg-dark">
      <h1 style="color:white">Helpful commands and hint</h1>
    </div>
    <div class="container">
      <h2>Personal PS1 Variable</h2>
      <p>Standard</p>
      <code>'\[\033[01;32m\]\u@\h\033[00m:\[\033[01;34m\]\w\033[00m$ '</code>
      <p>Root</p>
      <code>'\[\033[01;31m\]\u@\h\033[00m:\[\033[01;34m\]\w\033[00m$ '</code>
      <h2>Sort file in place</h2>
      <code>sort -o filename filename</code>
      <h2>Read Compressed Log file in place</h2>
      <code>zless filename</code>
      <h2>Get RPC info</h2>
      <code>rpcinfo -p x.x.x.x</h2>
    </div>
  </body>
</html>
