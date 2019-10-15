<html>
<head>
 <?php
      require '/var/www/html/hack/bootimport.php';
    ?>
</head>
<body>
    <?php
      require '/var/www/html/hack/nav.php';
    ?>
    <div class="jumbotron jumbotron-fluid blog-header text-center bg-dark">
    <h1 style="color:white">Fixed XOR</h1>
    </div>
    <div class="container">
  <p>In this challenge the goal was to take two hex encoded strings of equal 
  length and xor them against one another</p>

  <p>
    <code>String 1: 1c0111001f010100061a024b53535009181c</code><br />
    <code>String 2: 686974207468652062756c6c277320657965</code><br />
    <code>Answer String: 746865206b696420646f6e277420706c6179</code><br />
  </p>

  <p>In this challenge I again decided to take the approach of writing my own
     version of xor and operating on strings of binary characters instead of
     using the already in place libraries defined by python.  I started by creating
     a new script called cusbitops.py. Since an xor check is relatively easy I
     decided that I wanted to make my method a bit more robust. I defined a
     method called xor that would take in two binary strings. The first string I
     designated as the string to be operated on while the second string was
     designated as the operator string. Since XOR requires that the operated on
     string is shorter than the operator string I check to see if the length of
     the first string is less than or equal to the length of the second string.
     If the strings were not of equal length I first determined how many more
     characters short I was. I then decided that if the second string was
     shorter I should simply repeat that string until I had enough characters to
     complete the xor. I divided the length needed by the length of the second
     string and took the mathematical ceiling of the value. I then added many
     copies of the string to the original second string. This would guarantee
     that I would have enough characters to perform the xor even though I might
     have some extra. Finally I looped over the two and appended a one to the
     result if the character in the first or the second value were equal to one
     but not if the characters in the first and second value equaled each other.
     If that condition was not met I append a zero to the result.</p>

  <p>Next I needed to convert the value back to hex. To convert it back to hex I
     created another dictionary in the cushex.py script this time matching
     binary strings that were four characters long and  looped over blocks of
     four character changing them out with the matching hex character. Pretty
     much the same method I used before to convert from hex to binary.</p>

  <p>Since I assumed that they would also need to convert base64 to binary later
     I decided to also create a method for that. This method was slightly easier
     than the previous one but had a slight twist to it. In the dictionary for
     this method I added an entry for the equals sign that was equivalent to six
     zero’s so that the whole string was converted to binary and then I removed
     the extra bits, sixteen in the case of two equals signs and eight in the
     case of one equals sign. The extra zero’s that I add in the method are
     probably unnecessary but I felt at the time the code looked a bit more
     consistent.</p>

  <p>Code is on github</p>
  <p><a href="https://github.com/agentm007/crypto">https://github.com/agentm007/crypto</a></p>
</div>
</body>
</html>
