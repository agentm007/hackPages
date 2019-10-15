<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Intro to RSA</title>
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
      <h1 style="color:white">Intro to RSA</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>The goal of the intro to RSA challenge is to get a better idea of how
         RSA works. In the problem though you will encounter several different
         concepts that should be researched to get the best understanding of RSA
         these include, <a href="">Modular Exponentiation</a>,
         <a href="">Extended Euclidean Algorithm</a>, and Modular Inverse. To solve the
         challenge though only Modular Exponentiation is required. You are given
         the Decryption algorithm m = c<sup>d</sup> mod N where m is the
         plaintext message, c is the ciphertext, d is the decryption key, and N
         is the second half of the public key. You are then asked to decrypt a
         message given the following values,</p>
        <code>(e, N) = (0x3, 0x64ac4671cb4401e906cd273a2ecbc679f55b879f0ecb25eefcb377ac724ee3b1)</code><br />
        <code> d = 0x431d844bdcd801460488c4d17487d9a5ccc95698301d6ab2e218e4b575d52ea3</code><br />
        <code> c = 0x599f55a1b0520a19233c169b8c339f10695f9e61c92bd8fd3c17c8bba0d5677e</code><br />

      <h2>Solution</h2>
      <p>This problem is a bit more difficult than it looks. If you simply
         convert the hex values to decimal and attempt to put them into the
         algorithm you will find that it takes much too long for the computation
         to finish. To speed up the calculation you will want to use the Modular
         Exponentiation. To solve this challenge I wrote up the modular
         exponentiation algorithm in python.</p>
      <code><pre>
def exponentiationmod(base, exponent, mod):
    if(mod == 1):
        return 0
    c = 1
    while exponent != 0:
        if exponent%2 != 0:
            c = (c * base)%mod
        exponent >>= 1
        base = (base * base) % mod
    return c
      </pre></code>
      <p>If you are interested in how the modular exponentiation please take a
         look here. After converting the decimal value back to hex you will have
         your answer.</p>
      <code>4d801868d894740b2be29309fcd3edcd51bd2c2a685028b89290f9268c727581</code>
      <h2>Notes</h2>
      <p>While I rewrote the modular exponentiation algorithm this isn’t
         required at all, the python pow() function has this all built in. While
         this will get you the correct answer it’s probably a good idea to take
         a look at the full <a href="">RSA</a> write up as decryption algorithm really
         just scratches the surface of understanding how RSA works.</p>
    </div>
    <?php
      include "links.php";
    ?>
  </body>
</html>
