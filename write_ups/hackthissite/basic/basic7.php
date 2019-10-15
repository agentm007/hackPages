<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Basic 7</title>
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
      <h1 style="color:white">Basic 7</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>The sysadmin has added a feature to the page, now you can enter in a
         year and get back a page with a calendar. You are also told that there
         is a file in the same directory that contains the password for the level.</p>
      <h2>Solution</h2>
      <p>If you have ever seen a command injection before then this challenge
         should be easy. Since you know that unix command is being used you can
         just enter in a semicolon and the ls command to list the files in that
         directory.</p>
      <code>; ls</code>
      <p>Then just go to the file listed for the password</p>
      <code>35430cd1</code>
    </div>
  </body>
</html>
