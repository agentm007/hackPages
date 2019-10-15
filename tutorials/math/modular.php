<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Modular Arithmetic</title>
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
      <h1 style="color:white">Modular Arithmetic</h1>
    </div>
    <div class="container">
      <h1>Introduction</h1>
      <p>Modular Arithmetic is frequently seen in computer science. This is
         particularly seen in cryptography. If you plan on looking into
         cryptography it’s recommended that you read through this first.</p>

      <p>When two integers are divided we have the following equation: A/B = Q 
         remainder R</p>
      <p>Where <br />
         A is the dividend<br />
         B is the divisor<br />
         Q is the quotient<br />
         R is the remainder </p>

      <p>With the modulus operator you are only finding the remainder.<br />
         A mod B = R<br />
         In this case B is the modulus<br />
         Mod = modulus</p>

      <p>Ex:<br />
         12/8 = 1 remainder 4<br />
         12 mod 8 = 4</p>

      <p>Modulus can oftentimes be thought of as a clock face where the top is
         zero and the remaining numbers would be placed sequentially around the
         clock face till the modulus minus one is reached.</p>

      <p>Sometimes you will have to take the modulus of a negative dividend. If
         you think about modulus as a clock. A negative dividend would represent
         the the number of spaces you would move counterclockwise. The best way
         to find the value is to first ignore the negative and find the positive
         remainder. The take the modulus minus the positive remainder to find
         the correct value. Another method to find the modulus of a negative
         dividend again first involves ignoring the negative and then finding
         the multiple of the modulus that is just larger than the dividend. Then
         take the value and subtract the dividen from it to find the the modulus.</p>

      <p>Ex:<br />
         Method 1:<br />
         -8 mod 3 =<br />
         8 mod 3 = 2<br />
         3 - 2 = 1<br />
         <br />
         Method 2:<br />
         -8 mod 3 =<br />
         3*3 = 9 &gt; 8<br />
         9 - 8 = 1</p>

      <p>When coding in python the modulus operator is represented by the % sign.</p>

      <p>Note that many programing languages do not correctly calculate the
         modulus of a negative dividend. Instead they calculate the positive
         dividend and then take that answer and multiply it by negative one.</p>

      <h1>Congruence Modulo</h1>
      <p>While working with modulus you will most likely come across the 
         following statement A &equiv; B (mod C)</p>

      <p>This states that A is congruent to B modulo C</p>

      <p>Congruence is a set of values that when taken to the same modulo will
         return the same remainder.</p>

      <p>Ex. <br />
         26 &equiv; 11 (mod 5) 
         26 is congruent to 11 mod 5 because <br />
         26 mod 5 = 1<br />
         And <br />
         11 mod 5 = 1</p>

      <p>Numbers the set of numbers that are congruent for a particular modulo
         are said to be in the same equivalence class</p>

      <p>Looking at A &equiv; B (mod C) we can consider the first equivalence
         class of C to be XC+1 where X is a any integer. Since this is true
         for both positive and negative values of X it can be said that the
         difference between any two values in the same equivalence class will
         result in a value that is simply a multiple of C. This is because any
         when finding the difference the number added will always cancel out.</p>

      <p>Since the difference between any two numbers in the same equivalence
         class will always result in a multiple of the modulo we can use this
         to test if two numbers are in the same equivalence class.</p>

      <p>Ex.<br />
         27 &equiv; 9 mod 6 because 27 -  9 = 18 and 18 is a multiple of 6*3</p>

      <h1>Equivalence Relations</h1>

      <p>The following Statements are equivalent
         A &equiv; B(modC)<br />
         A mod C = B mod C<br />
         C | (A - B)  (Note: the | symbol means divides, or is a factor of)<br />
         A = B + K * C (Where K is some integer)</p>

      <p>Ex. 
         7 &equiv; 5 (mod 2)<br />
         7 mod 2 = 5 mod 2<br />
         2 | ( 7 - 5)<br />
         7 = 5 + K * 2 where K = 1</p>

      <p>An equivalence relation is a relation where the reflexive, symmetric,
         and transitive properties are all true for the relationship. Since
         these properties are true for congruence, congruence represents an
         equivalence relation.</p>

      <p>Reflexive: A is related to A<br />
         Symmetric: A is related to B and B is related to A<br />
         Transitive: A is related to B and B is related to C so A is related to C</p>

      <p>Ex.<br />
         Reflexive: 3 3 (mod 5)<br />
         Symmetric: 3  8 (mod 5) and 8  3 (mod 5)<br />
         Transitive: 3  8 (mod 5) and 8  18 (mod 5) so 3  18 (mod 5)</p>

      <p>Values that share a same modulus fall into the same equivalence class.
         Every value in an equivalence class is directly related to all other
         values in the equivalence class by a factor of the modulo.</p>


      <h1>Quotient Remainder Theorem</h1>

      <p>Given any integer A and a positive integer B there exists unique
         integers Q and R such that A = B * Q + R</p>

      <p>When A is divided by B in long division, Q is the quotient and R is
         the remainder. So this can also be written as A mod B = R</p>

      <p>Though this may seem obvious it needs to be stated for proofs. It’s
         also important to remember that Q and R are unique integers.</p>

      <h1>Modular Addition</h1>

      <p>Modular addition can be stated as:<br />
         (A+B) mod C = (A mod C + B mod C) mod C</p>

      <p>Ex.<br />
         A = 14<br />
         B = 17<br />
         C = 5</p>
         <br />
         (14 + 17) mod 5 =<br />
         (31) mod 5 = 1</p>

      <p>(14 mod 5 + 17 mod 5) mod 5 =<br />
         (4 + 2) mod 5 =<br />
         6 mod 5 = 1</p>

      <p>For modular addition splitting up the values doesn’t affect the
         results since every modulo worth of steps will be taken out at the
         end anyway. This is also why the modulus is applied at the end of the
         equation because the final addition might come out to be more than
         the modulo.</p>

      <p>This can be proven with the help of Quotient Remainder Theorem</p>
      <p>Proof:<br />
         (A+B) mod C = <br />
         <br />
         Using quotient remainder theorem we can write A and B as <br />
         A = C * Q1 + R1 where 0  R1  C and Q1 is some integer A mod C = R1<br />
         <br />
         B = C * Q2 + R2 where  0  R2  Cand Q2 is some integer B mod C = R2<br />
         <br />
         So (A + B) mod C can be written as <br />
         ( (C * Q1 + R1) + (C * Q2 + R2) ) mod C<br />
         <br />
         When reduced we get<br />
         (C * ( Q1 + Q2) + (R1 + R2)) mod C<br />
         <br />
         Since All items that are a factor of C will be removed by the modulo we can remove C * ( Q1 + Q2) leaving us with <br />
         (R1 + R2)mod C<br />
         <br />
         Since from before A mod C = R1 and B mod C = R2 we can substitute out the R values and get our answer <br />
         (A mod C + B mod C) mod C = (A+B) mod C</p>

      <h1>Modular Subtraction</h1>

      <p>Modular subtraction can be stated as:<br />
         (A - B) mod C = (A mod C - B mod C) mod C</p>

      <p>Ex. 
         A = 23<br />
         B = 18<br />
         C = 7<br />
         <br />
         (23-18) mod 7<br />
         5 mod 7 = 5<br />
         <br />
         ((23 mod 7) - (18 mod 7)) mod 7 =<br />
         (2 - 4) mod 7 = <br />
         -2 mod 7 = 5</p>

      <p>The proof for modular subtraction is nearly identical to modular addition.</p>
      <p>Proof:<br />
         (A - B) mod C =<br />
         <br />
         Using quotient remainder theorem we can write A and B as <br />
         A = C * Q1 + R1 where 0  R1  C and Q1 is some integer A mod C = R1<br />
         <br />
         B = C * Q2 + R2 where  0  R2  Cand Q2 is some integer B mod C = R2<br />
         <br />
         So (A - B) mod C can be written as <br />
         ( (C * Q1 + R1) - (C * Q2 + R2) ) mod C<br />
         <br />
         When reduced we get<br />
         (C * ( Q1 - Q2) + (R1 - R2)) mod C<br />
         <br />
         As before we can cancel out all factors of C since the modulo will remove them anyway <br />
         (R1 - R2) mod C<br />
         <br />
         Since from before A mod C = R1 and B mod C = R2 we can substitute out the R values and get our answer <br />
         (A mod C - B mod C) mod C = (A-B) mod C</p>

        <h1>Modular Multiplication</h1>

        <p>Modular multiplication can be stated as:<br />
         (A*B) mod C = (A mod C * B mod C) mod C</p>

        <p>The proof for this is almost exactly the same as the previous
         proofs for modular addition and modular subtraction.</p>

        <p>Proof:
         (A*B) mod C <br />
         A = C * Q1 + R1 where 0  R1  C and Q1 is some integer A mod C = R1<br />
         B = C * Q2 + R2 where  0  R2  Cand Q2 is some integer B mod C = R2<br />
         <br />
         So (A - B) mod C can be written as <br />
         ( (C * Q1 + R1) * (C * Q2 + R2) ) mod C<br />
         <br />
         Which becomes<br />
         (CQ1CQ2 + CQ1R2 + R1CQ2 + R1R2) mod C<br />
         <br />
         Any factors of C can be removed as they will be canceled out by the modulus leaving us with <br />
         (R1R2) mod C<br />
         <br />
         And R1 and R2 can be translated into A mod C and B mod C<br />
         (A mod C * B mod C) mod C = (A * B) mod C</p>

        <h1>Modular Exponentiation</h1>
        <p>Modular Exponentiation can be stated as:<br />
         A<sup>B</sup> mod C = ((A mod C)B) mod C</p>

        <p>Modular Exponentiation is essentially just an extension of modular
         multiplication but instead of using two dividends we only have one,
         in this case A</p>

        <p>Using this knowledge we can help speed up the taking very large
         modular exponents. This is explained in a separate article on modular
         exponentiation. <a href="modexp.php">Link Here</a></p>

        <h1>Modular Inverse</h1>
        <p>In multiplication an inverse is defined as the number that when
         multiplied by a specific value results in one. Ex. 5 * 1&frasl;5 = 1
         This is the same for a modular inverse. The Modular inverse is when A
        *A-1 &equiv; 1 mod C or (A*A-1) mod C = 1</p>

        <p>The Naive method of finding it is<br />
         Calculate A* B for B values 0 through C - 1<br />
         The inverse is the value that makes A*B mod C = 1</p>


        <p>Ex1. A = 3 and C = 7<br />
         3 * 0 mod 7 = 0 <br />
         3 * 1 mod 7 = 3<br />
         3 * 2 mod 7 = 6<br />
         3 * 3 mod 7 = 2<br />
         3 * 4 mod 7 = 5<br />
         3 * 5 mod 7 = 1 <br />
         3 * 6 mod 7 = 4<br />
         So 5 will be the modular inverse</p>


        <p>Ex2. A=2 and C=6<br />
         2*0 mod 6 = 0<br />
         2*1 mod 6 = 2<br />
         2*2 mod 6 = 4<br />
         2*3 mod 6 = 0<br />
         2*4 mod 6 = 2<br />
         2*5 mod 6 = 4<br />
         This Problem has no modular inverse</p>

        <p>Notes: As was shown not all values have a modular inverse and the
         method that was used to find the modular inverse was slow and
         cumbersome. There is a better way to find the modular inverse.</p>


    </div>
  </body>
</html>
