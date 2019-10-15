<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Basic 10</title>
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
      <h1 style="color:white">Basic 10</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>You are again given just a password box and a short description that
         mentions something about javascript. Your goal is to pass the challenge.</p>
      <h2>Solution</h2>
      <p>This one is a bit different than the last and it doesn’t really give you
         a clue to the answer. In this case you will have to take a look at the
         cookies. While looking at the cookies you will find an entry called
         <code>level10_authorized=no</code> you will want to just change this it
         yes and then hit submit that’s it. You can change the cookie using
         javascript but it’s just as easy to use an intercepting proxy. Either
         way it’s good to know about cookies and “client side security”. I would
         recommend doing both for practice on the subject. It’s also a good
         thing to check cookies when looking at a website.</p>
    </div>
  </body>
</html>
