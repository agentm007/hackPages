<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Select</title>
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
      <h1 style="color:white">Cryptography Hints</h1>
    </div>
    <div class="container">
      <p>Here are some general hints for working with crypto challenges</p>

      <h2>Letter Frequencies</h2>
      <p>Listed here are some letter frequencies. Other lists exist online with 
         better values.</p>
      <code><pre>
A :  8.55        K :  0.81        U :  2.68
B :  1.60        L :  4.21        V :  1.06
C :  3.16        M :  2.53        W :  1.83
D :  3.87        N :  7.17        X :  0.19
E : 12.10        O :  7.47        Y :  1.72
F :  2.18        P :  2.07        Z :  0.11
G :  2.09        Q :  0.10
H :  4.96        R :  6.33
I :  7.33        S :  6.73
J :  0.22        T :  8.94
      </pre></code>
      <h2>Bigram Frequencies</h2>
      <p>Listed here are some of the top bigram frequencies. Other lists exist
         online with better values.</p>
      <code><pre>
TH :  2.71        EN :  1.13        NG :  0.89
HE :  2.33        AT :  1.12        AL :  0.88
IN :  2.03        ED :  1.08        IT :  0.88
ER :  1.78        ND :  1.07        AS :  0.87
AN :  1.61        TO :  1.07        IS :  0.86
RE :  1.41        OR :  1.06        HA :  0.83
ES :  1.32        EA :  1.00        ET :  0.76
ON :  1.32        TI :  0.99        SE :  0.73
ST :  1.25        AR :  0.98        OU :  0.72
NT :  1.17        TE :  0.98        OF :  0.71
      </pre></code>

      <h2>Trigram Frequencies</h2>
      <p>Listed here are some of the top trigram frequencies. Other lists exist
         online with better values</p>
      <code><pre>
THE :  1.81        ERE :  0.31        HES :  0.24
AND :  0.73        TIO :  0.31        VER :  0.24
ING :  0.72        TER :  0.30        HIS :  0.24
ENT :  0.42        EST :  0.28        OFT :  0.22
ION :  0.42        ERS :  0.28        ITH :  0.21
HER :  0.36        ATI :  0.26        FTH :  0.21
FOR :  0.34        HAT :  0.26        STH :  0.21
THA :  0.33        ATE :  0.25        OTH :  0.21
NTH :  0.33        ALL :  0.25        RES :  0.21
INT :  0.32        ETH :  0.24        ONT :  0.20
      </pre></code>

      <h2>Quadgram Frequencies </h2>
      <p>Listed here are some of the top trigram frequencies. Other lists exist
         online with better values</p>
      <code><pre>
TION :  0.31        OTHE :  0.16        THEM :  0.12
NTHE :  0.27        TTHE :  0.16        RTHE :  0.12
THER :  0.24        DTHE :  0.15        THEP :  0.11
THAT :  0.21        INGT :  0.15        FROM :  0.10
OFTH :  0.19        ETHE :  0.15        THIS :  0.10
FTHE :  0.19        SAND :  0.14        TING :  0.10
THES :  0.18        STHE :  0.14        THEI :  0.10
WITH :  0.18        HERE :  0.13        NGTH :  0.10
INTH :  0.17        THEC :  0.13        IONS :  0.10
ATIO :  0.17        MENT :  0.12        ANDT :  0.10
      </pre></code>

      <h2>Quintgram Frequencies</h2>
      <p>Listed here are some of the top quintgram frequencies. Other lists
         exist online with better values.</p>
      <code><pre>
OFTHE :  0.18        ANDTH :  0.07        CTION :  0.05
ATION :  0.17        NDTHE :  0.07        WHICH :  0.05
INTHE :  0.16        ONTHE :  0.07        THESE :  0.05
THERE :  0.09        EDTHE :  0.06        AFTER :  0.05
INGTH :  0.09        THEIR :  0.06        EOFTH :  0.05
TOTHE :  0.08        TIONA :  0.06        ABOUT :  0.04
NGTHE :  0.08        ORTHE :  0.06        ERTHE :  0.04
OTHER :  0.07        FORTH :  0.06        IONAL :  0.04
ATTHE :  0.07        INGTO :  0.06        FIRST :  0.04
TIONS :  0.07        THECO :  0.05        WOULD :  0.04
      </pre></code>


      <h2>The Dancing Men</h2>
      <p>The dancing men code comes from a Sherlock  Holmes story of the same
         name. In it a code is used that consists of small dancing men pictures.
         If ever encountered in a challenge there are already decoders for this
         online. Simply find a decoder and run the message through. If a decoder
         fails it is possible to crack the code with the use of frequency
         analysis.</p>
      <img src="images/dancingmen.png">

      <h2>Pigpen Cipher</h2>
      <p>Pigpen cipher is a code made up from lines and boxes. It has been used 
         off and on throughout history, probably the most famous use is by the
         freemasons. There is  a variant called templar cipher that uses
         triangles more so than lines.</p>
      <img src="images/pigpen.png" height=240 width=240>

      <h2>Templar Cipher</h2>
      <p>A variant of pigpen cipher supposedly used by the knights templar.</p>
      <img src="images/templarcipher.png">

      <h2>Braille</h2>
      <p>Braille is frequently also used in cryptographic coding challenges. Any
        time you see dots it’s a good bet that braille is being used.</p>
      <img src="images/braille.png">

    </div>
  </body>
</html>
