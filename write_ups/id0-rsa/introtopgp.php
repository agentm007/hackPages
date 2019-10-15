<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Intro to PGP</title>
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
      <h1 style="color:white">Intro to Hashing</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>Intro to PGP is a bit more complex than the previous tutorial. It goes
         over the installation creation of a key set and the importing of someone
         else's key in gpg. A few notes on the tutorial, during the step that
         they tell you to generate the key you will probably want to use 
         --full-gen-key instead of --gen-key, this is because it contains all of
         the options that they mention where as --gen-key is trimmed down a bit,
         next they don’t really go into verifying a signature so don’t be
         surprised if this command doesn’t work.</p>

      <h2>Solution</h2>
      <p></p>
      <p>The final challenge is to pretty much check a signature. If you don’t
         want to get any errors you will have to run the import command with the
         file that they had you create but you can get the message by just
         running gpg -d. Note that it will complain if you haven’t imported
         their public key but it will still give you the message since it’s not
         actually encrypted by anything just signed. Technically you can finish
         they challenge by simply decoding the base64 that is given.</p>
      <code>gpg -d message</code>
    </div><br />
    <?php
      include "links.php";
    ?>
  </body>
</html>
