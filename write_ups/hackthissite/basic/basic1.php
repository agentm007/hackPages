<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Basic 1</title>
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
      <h1 style="color:white">Basic 1</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>You are given a page with a password box and told that the solution has
         something to do with html. Enter in the correct password to continue.</p>
      <h2>Solution</h2>
      <p>The password is inside a comment on the page. Just look at the source
         of the page and enter in the password.</p>
      <code>&lt;!-- the first few levels are extremely easy: password is b7579f82 --&gt;</code>
    </div>
  </body>
</html>
