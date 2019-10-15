<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Basic 6</title>
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
      <h1 style="color:white">Basic 6</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>The sysadmin has this time “encrypted” the password and listed on the
         page. You have a text box and a button that allows you to encrypt a
         string of your own.</p>
      <h2>Solution</h2>
      <p>The trick to this is to figuring out the code is simply to try 1 letter
         or a number at a time. After you work through a few letters and numbers
         it will be pretty clear what the trick is. The first letter is not
         shifted at while the next letter is shifted by 1 then 2 and so on. If
         you get an ascii table and move the letters back you should be good.</p>
      <code>9d69f00f</code>
    </div>
  </body>
</html>
