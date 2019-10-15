<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Basic 8</title>
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
      <h1 style="color:white">Basic 8</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>In this challenge are given a script that asks for your name and then
         sends you to a page that says hello.</p>
      <h2>Solution</h2>
      <p>The answer to this one is a bit tricky but gives you some hints that
         make it really easy. The write up before the challenge states that you
         should look into Server Side Inclusion. Server Side Includes execute
         commands on an html page. If you are looking to learn more about this
         check out the apache article on how to implement it
         <a href=" https://httpd.apache.org/docs/2.4/howto/ssi.html">apache</a>
         or
         <a href=" https://www.owasp.org/index.php/Server-Side_Includes_(SSI)_Injection">Owasp</a>
         on how to exploit it. From the latter of the two articles you can see
         some examples of injection we will be using injection to find the name
         of the file. You will want to check one directory up to find the name.</p>
      <code>&lt;--#cmd="ls ../"&gt;</code>
      <p>Now just navigate to the file to find the password or you can cat the
         file if you wish.</p>
      <code>2a7b8856</code>
    </div>
  </body>
</html>
