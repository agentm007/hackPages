<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Large Exponents</title>
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
      <h1 style="color:white">Large Exponents</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>It can be very difficult to calculate large exponents. If you simply
         start entering in very large values into python you will quickly find
         that python will stall and often times be unable to complete the
         calculation without crashing. There is an extremely easy fix for this
         that involves breaking up the exponent. Using this solution will allow
         you to perform the calculation much faster and more efficiently then
         trying to tackle the whole problem in one go.</p>

      <h2>Solution</h2>
      <p>In finding the solution there are two things to remember, the first is
         that an exponent is simply a value multiplied by itself multiple times,
         secondly to raise a power to a power you need to multiply the exponents
        (See power rule).</p>
      <code>7<sup>5</sup> = 7*7*7*7*7</code><br />
      <code>(7<sup>3</sup>)<sup>2</sup> = 7<sup>6</sup></code>
      <p>Knowing these two concepts it becomes relatively easy to break down
         very large exponents into smaller more manageable chunks. The first
         thing you will want to do when working on a large exponent is to check
         if the exponent is even. If the exponent is even you can immediately
         break it into your base value squared taken to the power of half your
         original exponent.</p>
      <code>7<sup>20</sup> = (7<sup>2</sup>)<sup>10</sup></code><br />
      <code>(7<sup>2</sup>)<sup>10</sup> = ((7<sup>2</sup>)<sup>2</sup>)<sup>5</sup></code>
      <p>As long as the values are even you can repeat this series of steps till
         you reach your answer but if the exponent is odd you will have to find
         a way to make the exponent even. To do this you will subtract one from
         your exponent and multiply the current base value by the current base
         to the power of your new exponent.</p>
      <code>7<sup>5</sup> = 7*(7<sup>4</sup>)</code><br />
      <code>7*(7<sup>4</sup>) = 7*(7<sup>2</sup>)<sup>2</sup></code>
      <p>Then just repeat the last two steps until you reach your final value.
         The python code for this is listed below.</p>

      <h2>Code</h2>
      <code><pre>
def exponents(base, exponent):
    c = 1
    while exponent !=0:
        if exponent & 1:
            c = (c * base)
        exponent >>= 1
        base = (base * base)
    return c
      </pre></code>
      <h2>Explanation of Code</h2>
    <p>The function starts by getting a base value and an exponent passed to it.
       Then a variable called c is defined and set equal to one. The c variable
       will be used later to return the answer and has an initial value of one
       so that it can equal any previous base value needed for odd exponents.
       Next a while loop is started setting to run as long as the exponent value
       does not equal zero. Inside the loop we first ask if the current exponent
       value is even or odd. This is accomplished by taking the binary 'and' of
       the exponent and 1, if the value is even it will return zero and skip the
       loop since 0 in python is false or, it will return 1 and execute the if
       statement. If the exponent value is odd we take the current base value
       and multiply it by our c value and then store it as the new value of c,
       this is essentially just multiplying the base values from all of the
       times the exponent is odd. Following the if statement the exponent value
       is right shifted by one bit. This has the double benefit of both dividing
       the exponent by two and discarding any remainders. Next the base is set
       equal to the base squared storing the value for subsequent loops. The
       while loop will then run until the the exponent equals zero and since the
       last exponent will always be equal to one the answer will get stored in
       c. Finally we return the c value.</p>

      <p>One thing to not about the function is that the base value will in this
         current state get calculated one more time than is necessary. This
         could be fixed by modifying the checks but it has rather little effect
         on the speed of the function. Finally this method will not work with
         exponents of negative values. These fixes would be relatively trivial
         but just are not worth the work for this example problem.</p>

      <h2>Notes</h2>
      <p>On a final note please do not feel that you ever need to write this
         algorithm up for any project that you do, better solutions already
         exist. If you are using python the pow() function is built in by
         default and is optimized better than you will probably ever be able to.
         Similar solutions exist in any good language. If you are using a
         language that does not have this algorithm built in just stop using the
         language, it’s total shit. Finally if you want to go on from here look
         at modular exponentiation <a href="modexp.php">here</a>. This is the
         logical next step on this mathematical path and is an algorithm used in
         RSA.</p>
    </div>
  </body>
</html>
