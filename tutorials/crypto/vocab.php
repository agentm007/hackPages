<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cryptography Vocabulary</title>
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
      <h1 style="color:white">Cryptography Vocabulary</h1>
    </div>
    <div class="container">
      <p>Here are some general cryptography vocabulary terms.</p>
      <ul>
        <li>Bigram or Digrams</li>
        <p>Bigrams or Digrams are a sequence of two adjacent letters. Knowing
           the frequency of some of these bigrams allows us to better analyze
           text and help crack things like substitution cipher. A list of
           common bigrams with frequencies can be found on the the cryptography
           <a href="hints.php">hints</a> page.</p>
        <li>Trigrams, Quadgram and Quintgram</li>
        <p>Trigrams, Quadgram and Quintgram are the same as bigrams and digrams
           only they use three, four and five letters respectively instead of
           just two. A list of common ones with frequencies can be found on the
           cryptography <a href="hints.php">hints</a> page.</p>
        <li>Plaintext</li>
        <p>Is the original message that is unaltered.</p>
        <li>Ciphertext<li>
        <p>Is the the encrypted text that ideally can only be returned to the
           original message with the known key.</p>
        <li>Key</li>
        <p>Is a value that is used to turn a ciphertext back into a
           plaintext.</p>
        <li>Encryption</li>
        <p>Encryption is the process of encoding data in such a way that it is
           not recoverable without a key. Ideally encrypted information should
           look like random data and cannot be searched for.</p>
        <li>Decryption</li>
        <p>Decryption is the process of turning a ciphertext back into a
           plaintext.</p>
        <li>Encoding</li>
        <p>Encoding is using an algorithm to convert information from one form
           to another. It is reversible and does not require any sort of key.</p>
        <li>Cryptographic Hash</li>
        <p>Is a function that should be irreversible and is usually used to
           store passwords and check file integrity. Hashes should produce a
           values that are a set length incur data loss when used. Hashes should
           also present a challenge to find a duplicate value or collison. Note
           that hashing is only part of the password storage solution, user
           passwords should be salted and then hashed, and modern applications
           should use a key derivation function, which incorporates a hash and a
           salt, rather than simply hasing stored passwords. Try not confuse
           cryptographic hashes with hashing in programing.</p>
        <li>Salt</li>
        <p>A salt is a random value that should be prepended to the users
           password before hashing. Salts prevent rainbow table attacks from
           working and duplicate passwords from being cracked simultaneously. A
           salt should be generated from a good source of RNG and there should
           be enough so that no two users have the same salt. Salts do not need
           to be kept secret.</p>
        <li>Substitution Cipher</li>
        <p>A classical cipher that substitutes one letter for another letter or
           symbol. Theoretically it has eighty eight bit key space but is broken
           fairly easily with the use of frequency analysis, bigrams and other
           patterns.</p>
        <li>Shift Cipher</li>
        <p>A classical cipher that shifts the alphabet a certain number of
           spaces. The keyspace in the english alphabet is literally only 26
           letter so this is not a practical method of encryption and takes
           under a second to break.</p>
        <li>Caesar Cipher</li>
        <p>A form of shift cipher supposably used by Julius Caesar. Caesar
           cipher shifted the letters down three characters hence A = D</p>
        <li>Rotation 13 (ROT 13)</li>
        <p>A form of shift cipher that shifts the alphabet down by 13
           characters, essentially folding the alphabet in half, A = N. Most
           commonly seen online. Usually it is used to get around profanity
           sensors.</p>
        <li>Rotation 26 (ROT 26)</li>
        <p>A common joke in crypto. A Rotation of 26 will result in the same
           plaintext as was entered in originally.</p>
        <li>Perfect Secrecy (PS)</li>
        <p>Given unlimited time and computing power it is impossible to
           determine anything about the plaintext other than its length.</p>
        <li>Perfect Forward Secrecy(PFS), Forward Secrecy(FS)</li>
        <p>Indicates for an application using TLS or SSL the compromisation of
           the servers private key will not lead to the compromisation of any
           past sessions with the server. This is accomplished by using the
           servers private key as a signing key and signing temporary keys used
           by the server.</p>
        <li>One Time Pad (OTP)</li>
        <p>Is an encryption technique that if used correctly be cracked. A one
           time pad is a list of random values or letters that is usually XOR’ed
           with the plaintext to create the ciphertext. It is important that the
           one time pad is first off completely random and secondly only used
           once. Due to the nature of XOR if the pad is used multiple times it
           is possible to crack or easily change the message. If the pad is not
           random, like if for example a pseudo random number generator is used,
           the sequence of the pad or key can be predicted and broken. One time
           pad is not the answer to all encryption problems, many people new to
           encryption become fixated on the idea despite the fact that much more
           practical encryption systems exist.</p>
        <li>Random number generator (RNG)</li>
        <p>Is an algorithm or process to generate random numbers. Random number
           generators should use some sort of environmental data that is not
           predictable to create the random numbers. This will often be referred
           to as a secure random number generator.</p>
        <li>Pseudo random number generator (PRNG)</li>
        <p>Is a deterministic algorithm that creates predictable random numbers.
           Pseudo random number generators should not be used for cryptographic
           purposes as the predictability can cause the key to be uncovered.</p>
        <li>Data Encryption Standard (DES)</li>
        <p>An old encryption system that was created in the 1970’s and modified
           by the NSA. The encryption system uses a 56 bit key and is considered
           broken today. Brute force attacks are able to beat DES reliably.</p>
      </ul>
    </div>
  </body>
</html>
