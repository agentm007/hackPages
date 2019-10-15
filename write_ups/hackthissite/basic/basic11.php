<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Basic 11</title>
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
      <h1 style="color:white">Basic 11</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>This challenge is fucking stupid there is no other way to describe it.
         The current version might not even work as it had some problems when I
         worked with it last. There are two things you can learn from this
         exercise the first is directory level browsing and the second is the
         apache .htaccess file. You can really learn more by just reading up on
         Apache configs.</p>
      <h2>Solution</h2>
      <p>If you want to solve this challenge enter in the directory path /e/,
         then follow the child directories up. At the top you will find a file
         called .htaccess and in that file you will find two different pages,
         one called the DaAnswer and the other at the top level directory called
         index.php, here you enter in the password that you got from DaAnswer
         page. This challenge honestly is more like hunt the directory than
         anything else. Go online and learn about apache and directory level
         browsing instead.</p>
      <code></code>
    </div>
  </body>
</html>
