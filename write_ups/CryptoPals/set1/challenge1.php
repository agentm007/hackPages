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
    <h1 style="color:white">Challenge 1 Convert hex to base64</h1>
    </div>
    <div class="container">
  <h1></h1>
  <h2>The goal of this challenge was to convert a hex string to a base64 string.</h2>
  <code>Hex: 49276d206b696c6c696e6720796f757220627261696e206c696b65206120706f69736f6e6f7573206d757368726f6f6d</code><br />
  <code>Base64: SSdtIGtpbGxpbmcgeW91ciBicmFpbiBsaWtlIGEgcG9pc29ub3VzIG11c2hyb29t</code>
  <p>For this challenge there are were two other notes. First the code that I
     create will be used in the rest of the exercises and secondly I should only
     operate on raw bytes.</p>

  <p>After creating the dictionary I modified the method so that it would only
     convert any lowercase letters passed in, to uppercase and created an array
     called result that I would store my answer in. I decided to save the answer
     in an array and later convert it to a string because repeatedly passing values
     to a new string was computationally inefficient and since python lacks a
     stringbuilder class the array method appears to be one of the better
     answers. The method then looped over the string taking each value from the
     matching dictionary entry and appending it to the result array. Finally I
     returned the array joined to a blank string to output the answer.</p>

  <p>To test the method I created a driver class that imported the cushex script
     and passed in a known value, in this case FFFF, and printed the result to
     the screen. Due to the overall simplicity of the method I decided against
     using a more robust testing method.</p>

  <p>Next I created the binToBase64 method. I decided to use a similar method
     with this one by looping over the binary string and using a dictionary to
     convert it to the base64 characters. The biggest difference for this was
     that in base64 the binary string must both be a multiple of 8 and a
     multiple of 6. If the value passed in was not a multiple of 8 the method
     simply exits without returning a result. In interest of time I decided
     against any heavy error checking. If it was a not a multiple of 6 some
     padding in the form of equals would need to be added to the end. Since as
     long as the value passed in was divisible by eight it would only ever be
     off by four or two from six I simply check the modulus of the value against
     six, if it was a two I would add four zeros to bring it 6 and append two
     equals to my final answer. If however the modulus came out to four I would
     add two zeros to the end and a single equals sign. Next I looped over the
     value in increments of six and added each matching dictionary value to the
     result. Finally if needed I appended the equals sings to the result and
     returned the base64 string. Again to test I modified the driver class using
     a known base64 string and check to see if it matched.</p>

  <h1>Code</h1>
  <h2>cushex.py</h2>
  <code><pre>
#!/usr/bin/python

binaryHex ={
        "0": "0000","1": "0001","2": "0010","3": "0011",
        "4": "0100","5": "0101","6": "0110","7": "0111",
        "8": "1000","9": "1001","A": "1010","B": "1011",
        "C": "1100","D": "1101","E": "1110","F": "1111"
        }

def hexToBin(value):
    value = value.upper()
    result = []
    for i in value:
        result.append(binaryHex[i])
    return ''.join(result)
</pre></code>


  <h2>cusbase64.py</h2>
  <code><pre>
#!/usr/bin/python

base64binary = {
        "000000": "A", "000001": "B", "000010": "C", "000011": "D", "000100": "E", "000101": "F", "000110": "G",
        "000111": "H", "001000": "I", "001001": "J", "001010": "K", "001011": "L", "001100": "M", "001101": "N",
        "001110": "O", "001111": "P", "010000": "Q", "010001": "R", "010010": "S", "010011": "T", "010100": "U",
        "010101": "V", "010110": "W", "010111": "X", "011000": "Y", "011001": "Z", "011010": "a", "011011": "b",
        "011100": "c", "011101": "d", "011110": "e", "011111": "f", "100000": "g", "100001": "h", "100010": "i",
        "100011": "j", "100100": "k", "100101": "l", "100110": "m", "100111": "n", "101000": "o", "101001": "p",
        "101010": "q", "101011": "r", "101100": "s", "101101": "t", "101110": "u", "101111": "v", "110000": "w",
        "110001": "x", "110010": "y", "110011": "z", "110100": "0", "110101": "1", "110110": "2", "110111": "3",
        "111000": "4", "111001": "5", "111010": "6", "111011": "7", "111100": "8", "111101": "9", "111110": "*",
        "111111": "/"
        }

def binToBase64(value):
    length = len(value)
    result = []
    ending = ""
    if( length%8 == 0):
        if(length%6 == 2):
            value += "0"*4
            length += 4
            ending = "=="

        elif(length%6 == 4):
            value += "0"*2
            length += 2
            ending = "="

        for i in range(0, length, 6):
            result.append(base64binary[value[i:i+6]])
        result.append(ending)
    return ''.join(result)

</pre></code>

  <h2>driver.py</h2>
  <code><pre>
#!/usr/bin/python
import cusbase64
import cushex

testhex='FF'
print cushex.hexToBin(testhex)

test64='010011010110000101101110'
print cusbase64.binToBase64(test64)
</pre></code>
</div>
</body>
</html>
