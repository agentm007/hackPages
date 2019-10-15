<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Modular Exponentiation</title>
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
      require '/var/www/html/hack/nav.php'
    ?>
    <div class="jumbotron jumbotron-fluid blog-header text-center bg-dark">
      <h1 style="color:white">Modular Exponentiation</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>Occasionally you will be given a problem that requires you to calculate
         both large exponents and find the a modulus of the result. This problem
         is very similar to finding the value of large exponents.</p>

      <h2>Solution</h2>
      <p>Given the properties of modular multiplication
         (A * B) mod C = (A mod C * B mod C) mod C we are able to break up the
         process and perform it much more quickly. The way this is done is by
         first looking at the exponent. If the exponent is odd we remove one
         from the exponent and take the expression without the exponent and
         store it for our final step.</p>
      <p>
        <code>8<sup>15</sup> mod 5</code><br />
        <code>8<sup>14</sup> mod 5</code><br />
        <code>Stored values [(8 mod 5)]</code><br />
      </p>

      <p>If on the other hand we start with a even value we divide the exponent
         by two  and save this as our new exponent and then take our base,
         square it, take the modulus of it make it our new base value.</p>
      <p>
        <code>8<sup>14</sup> mod 5</code><br />
        <code>Exponent = 14/2 = 7</code><br />
        <code>Base = 8<sup>2</sup> mod 5 = 4</code><br />
      </p>

      <p>We then repeat the last two steps until an exponent of zero is reached.
         At this point we will have a collection of values stored. Take the
         collection of stored values and multiply them together, then  take your
         modulus of the final value.</p>
      <p>
        <code>Stored Values [(8 mod 5), (4 mod 5), (1 mod 5)]</code><br />
        <code>((8 mod 5)* (4 mod 5)* (1 mod 5))mod 5</code><br />
        <code>12 mod 5</code><br />
        <code>2</code><br />
      </p>

      <h2>Example Problem</h2>
        <code><pre>
15<sup>15</sup> mod 23

Exp = 15 - 1 = 14
Storage = [ (15 mod 23)]
15<sup>14</sup> mod 23
Exp = 14 / 2 = 7
Base = 15^2 mod 23 = 225 mod 23 = 18

18<sup>7</sup> mod 23
Exp = 7 - 1 = 6
Storage = [ (15 mod 23), (18 mod 23) ]
18<sup>6</sup> mod 23
Exp = 6/2 = 3
Base = 18<sup>2</sup> mod 23 = 324 mod 23 = 2

2<sup>3</sup> mod 23
Exp = 3 - 1 = 2
Storage = [ (15 mod 23), (18 mod 23), (2 mod 23) ]
2<sup>2</sup> mod 23
Exp = 2/2 = 1
Base = 2<sup>2</sup> mod 23 = 4 mod 23 = 4

4<sup>1</sup> mod 23
Exp = 1 - 1 = 0
Storage = [ (15 mod 23), (18 mod 23), (2 mod 23), (4 mod 23) ]

((15 mod 23)*(18 mod 23)*(2 mod 23)*(4 mod 23)) mod 23
((15)*(18)*(2)*(4)) mod 23
( 2160 ) mod 23
21
        </pre></code>

      <h2>Code</h2>
      <code><pre>
def expmod(base, exponent, mod):
if(mod == 1):
            return 0
c = 1
    while exponent != 0:
            if exponent & 1:
                    c = (c * base)%mod
            exponent >>= 1
            base = (base * base) % mod
    return c
      </pre></code>

      <h2>Explanation of Code</h2>
      <p>In this case the algorithm starts by checking to see if the mod value
         is one. If mod is one it will immediately return zero and exit. If the
         mod value is not equal to one we instead create a variable c that is
         equal to one. The c variable will be used to store our final answer and
         pull out any odd exponent values along the way. A while loop is then
         initiated that will run until the exponent value has gotten down to
         zero. The if statement checks to see if the current exponent value is
         odd by taking the binary ‘and’ of the exponent and one. If the check
         comes out to be true the current base is taken times any previous odd
         exponent values and the modulus is applied. The if step here is the
         same as storing the values in the previous algorithm but it is simply
         multiplying as it goes.  After the if statement the exponent is shifted
         left by one bit, this has the double benefit of both dividing it by two
         and getting rid of any remainder. Next the new base is calculated by
         squaring the current base and taking the modulus of it. This loop then
         repeats until the exponent reaches zero. When the exponent reaches zero
         it returns our final value.</p>

      <p>This is pretty much exactly the same as the large exponents function.
         The only real difference is that modulus has been added to the equation.</p>

      <h2>Notes</h2>
      <p>On a final note please do not feel that you ever need to write this
         algorithm up for any project that you do, better solutions already
         exist. If you are using python the pow() function is built in by
         default and is optimized better than you will probably ever be able to.
         Similar solutions exist in any good language. If you are using a
         language that does not have this algorithm built in just stop using the
         language, it’s total shit.</p>
    </div>
  </body>
</html>
