<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hello Open SSL</title>
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
      <h1 style="color:white">Hello Open SSL</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>You are given an RSA private key, your goal is to decrypt a message using openssl and the private key.</p>
      <p>Key:</p>
      <code><pre>
-----BEGIN RSA PRIVATE KEY-----
MIGtAgEAAiEA5tygpSZdOZUMfuO3oTGWR4cALBtWui5UzrQw2/8JlZ0CAwEAAQIh
AI9n4Yp1KFfKlHaF8d15tgUONQXn+e3aI+beFKoi2XipAhEA/ZkHPmcDwXIqloGr
minb1wIRAOkMdv7emMGd08gwwOQ6i6sCEQC0pjcXx9BQFCCsWDDCwAC/AhEAxYcn
JQeO+izH4JpSJB/rWQIRAOO9m6JHEWgzLYD+fe003vw=
-----END RSA PRIVATE KEY-----
      </pre></code>
      <p>Ciphertext</p>
      <code>
6794893f3c47247262e95fbed846e1a623fc67b1dd96e13c7f9fc3b880642e42
      </code>

      <h2>Solution</h2>
      <p>There are two common ways to get the answer. One is to use openssl to
         simply decrypt the message and the other is to extract the text from
         the key and then run the rsa decryption algorithm on the ciphertext. I
         will go over both approaches note that the first one is probably the
         better option.</p>

      <h3>Option 1</h3>
      <p>First save the private key to a file. Then save the message as a binary
         file, it is important that the hex be converted to <b>binary</b> otherwise
         openssl will read the hex as ascii. Note that there are many ways to
         save the hex as a binary file but the easiest way is probably to use
         echo or printf.</p>
      <code>
$ echo -n -e "\x67\x94\x89\x3f\x3c\x47\x24\x72\x62\xe9\x5f\xbe\xd8\x46\xe1\xa6\x23\xfc\x67\xb1\xdd\x96\xe1\x3c\x7f\x9f\xc3\xb8\x80\x64\x2e\x42" &gt; ciphertext
      </code><br />
      <code>
printf "%b" ‘\x67\x94\x89\x3f\x3c\x47\x24\x72\x62\xe9\x5f\xbe\xd8\x46\xe1\xa6\x23\xfc\x67\xb1\xdd\x96\xe1\x3c\x7f\x9f\xc3\xb8\x80\x64\x2e\x42’ &gt; ciphertext
      </code><br />
      <p>Then simply run openssl rsautl with the decrypt, raw, in, inkey and
         usually hexdump.</p>
      <code>
        openssl rsautl -decrypt -in ciphertext -inkey key -raw -hexdump
      </code>
      <p>The important part of this command is the raw. If you don’t include the
         raw flag openssl will attempt to use padding and will throw an error.</p>

      <h3>Option 2</h3>
      <p>Since you have the private key you can get the modulus value and the
         private exponent needed to run the RSA decryption algorithm(m = c<sup>d</sup>
         mod N). First you will want convert the key to text</p>
      <code>
        openssl rsa -in key -text -out keyapart
      </code>
      <p>Then you will want to take the modulus value and the private exponent
         to run the RSA algorithm with. I ran the pow function in python, for
         this to work you will need to use the decimal versions of the hex values.</p>
      <code><pre>
&gt; pow(46850664013737792994750281719160595684628363005844343196822121243343619108418,64864279220818069312992004728310175743255654569558326571612098164215372150953,104421770260249418043860403190352836838911315913724037343989462172481694045597)
3535095567624360363
      </pre></code>
      <p>Finally you will have to convert the answer back to hex.</p>
      <code>310f2eb0634ed1ab</code>

      <h2>Notes</h2>
      <p>If you have done the Intro to RSA problem don’t use the second solution,
         it’s not the optimal way of getting the answer, I only used it because I
         kept on typing in the first solution wrong. Secondly attempting to use
         the <code>$ openssl genrsa 256</code> probably won’t work, this is
         because it is very difficult to generate such small keys.</p>
    </div>
    <?php
      include "links.php";
    ?>
  </body>
</html>
