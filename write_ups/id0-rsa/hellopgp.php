<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hello PGP</title>
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
      <h1 style="color:white">Hello PGP</h1>
    </div>
    <div class="container">
      <h2>Description</h2>
      <p>You are given a secret message that was encrypted with a simple english
         word using gpg. Can you recover the message by brute forcing the
         password, an english word is used as the password.</p>

      <h2>Solution</h2>
      <p>To accomplish this you will need to create a script that passes a list 
         of passwords to gpg and attempts to decipher the message. In this case
         I used python to finish the challenge since I prefer the way it works
         with files over bash, please note though that any language could be
         used to complete this challenge. First off I attempted to decrypt the
         test file that they gave using only command line arguments. This proved
         to be a bit more tricky than I anticipated as the switch needed
         “--bash” is a little unintuitive.</p>
      <code>$ gpg -d --batch --passphrase "password" message_file</code>
      <p>After I was able to decipher the test file I began to make python
         script that would call gpg with a list of english words. I used the
         words dictionary file, located at /usr/share/dict/words most linux
         boxes, the list has 102401 words in it so it seemed like a large enough
         sample size. Next I placed the words into a list and stripped out all
         of the new line characters. I then created a for loop with the list and
         looped over the gpg command attempting to decrypt the message with each
         word. Finally I checked if the return status was successful or equal to
         0, if it was I printed the word that was used to decrypt the file and
         broke the for loop.</p>
      <code><pre>#!/usr/bin/python3
import subprocess

wordlist = open('/usr/share/dict/words')
words = [i.strip('\n') for i in wordlist]

for i in words:
    output = subprocess.run(["gpg", "-d", "--batch", "--passphrase", i, "message"], stdout=subprocess.PIPE, stderr=subprocess.PIPE)
    if(output.returncode == 0):
        print(i)
        break</pre></code>

      <h2>Notes</h2>
      <p>First off I used list compression in python which can be confusing for
       people new to the syntax, more on that can be found <a href="http://csicyberfan.com/hack/other/general/python.php">here</a>.
       Next up I check for the right answer with the return code of the gpg
       command. This is simply a code used in unix based operating systems that
       says if the program completed successfully or not, more on that can be
       found <a href="https://shapeshed.com/unix-exit-codes/">here</a>. I used the break
       statement to exit out of the loop, while many people frown on this it
       works rather well for this case. If you chose to use my code to solve the
       problem, it can take a while to find the correct password, your system is
       not hanging it just doesn’t return any output till it finds the right
       answer. This and my other code can be found on my <a href="https://github.com/agentm007/id0-rsa">github</a>.</p>
    </div>
    <?php
      include "links.php";
    ?>
  </body>
</html>
