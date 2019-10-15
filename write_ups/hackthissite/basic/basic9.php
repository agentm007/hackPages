<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Basic 9</title>
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
      <h1 style="color:white">Basic 9</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>You are given only a password box and told that the answer depends on
         the last challenge.</p>
      <h2>Solution</h2>
      <p>This challenge is fucking stupid. You are simply using the script on
         the last challenge to visit the current directory. Here is the goddamn
         code.</p>
      <code>&lt;!--#exec cmd="ls ../../9"&gt;</code>
      <p>This is challenge pretty much is just trying to confuse you. There is
         no reason this should exist they fail to prove or anything teach
         anything other than the existence of directories. If you have problems
         with this challenge take a look at the last write up it’s pretty easy.</p>
      <code>
        03ef73fc
      </code>
    </div>
  </body>
</html>
