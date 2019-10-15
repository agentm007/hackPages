<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ceasar</title>
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
      <h1 style="color:white">Ceasar</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>You are given an encoded file string. Your goal is to decode the string.</p>
      <code><pre>
ZNKIGKYGXIOVNKXOYGXKGRREURJIOVNKXCNOINOYXKGRRECKGQOSTUZYAXKNUCURJHKIGAYKO
SZUURGFEZURUUQGZZNKCOQOVGMKGZZNKSUSKTZHAZOLOMAXKOZYMUZZUHKGZRKGYZROQKLOLZ
EEKGXYURJUXCNGZKBKXBGPJADLIVBAYKZNUYKRGYZZKTINGXGIZKXYGYZNKYURAZOUT
      </pre></code>
      <h2>Solution</h2>
      <p>The string is encoded with a rotation cipher. There are 25 different
         possible keys. It should take under a second to brute force. I used a
         javascript that I wrote for a previous project. Same thing can be done
         easily in python.</p>
      <code><pre>
#!/usr/bin/python3

def rot(message, shift):
    length = len(message)
    shift = shift%26
    output = ""
    for i in range(length):
        letter = ord(message[i])
        if((letter >= 65) and (letter<=90)):
            letter += shift
            if(letter > 90):
                letter -= 26;
            output += chr(letter)
        elif((letter >= 97) and (letter <= 122)):
            letter += shift
            if(letter > 122):
                letter -= 26
            output += chr(letter)
        else:
            output += chr(letter)
    return output

def bruteForce(message):
    for i in range(26):
        print(rot(message, i))
      </pre></code>
      <p>The previous python code can be used to solve the problem.</p>
      <code><pre>
THECAESARCIPHERISAREALLYOLDCIPHERWHICHISREALLYWEAKIMNOTSUREHOWOLDBECAUSEIMTOOLAZ
YTOLOOKATTHEWIKIPAGEATTHEMOMENTBUTIFIGUREITSGOTTOBEATLEASTLIKEFIFTYYEARSOLDORWHA
TEVERVAJDUXFCPVUSETHOSELASTTENCHARACTERSASTHESOLUTION
      </pre></code>
      <p>From that the following string can be entered in.</p>
      <code>VAJDUXFCPV</code>
    </div>
    <?php
      include "links.php";
    ?>
  </body>
</html>
