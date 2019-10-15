<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Intro to Hashing</title>
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
      <p>The intro to hashing challenge goes into the basics of what hashing is
        and how it works. The goal of the challenge was to first find the sha256
        hash value of “id0-rsa.pub” and then to take the resulting hash and find
        the md5 hash value of that.</p>

      <h2>Solution</h2>
      <p>In this case I simply used bash and ran the following commands.</p>
      <code>$ printf “id0-rsa.pub” | sha256sum<br />
            4b4c17690546df5edf6dd8c5a6c399a02e07367810c95f3d2776b730b4a326c8  -<br />
            $ printf “4b4c17690546df5edf6dd8c5a6c399a02e07367810c95f3d2776b730b4a326c8” | md5sum<br />
            b25d449d86aa07981d358d3b71b891de  -</code>
      <p>Then submitted the final value up. This could also fairly easily in 
        python 2.7 with the hashlib. I attempted it in 3.6 but the hashlib has
        some different quirks about it and it didn’t work. Also not that this
        was done with printf over echo because echo adds a newline character to
        the end.</p>
    </div>
    <?php
      include "links.php";
    ?>
  </body>
</html>
