<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stream cipher activity</title>
    <meta charset="utf-8">
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!--<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>-->
  </head>
  <body>
    <p>In this activity you are given a encrypted bank transaction. Your goal is 
       to modify the given ciphertext so that it sends to the example account
       instead.</p>

    <p>The transaction sends the following information: {Account: XXXXXXXX, Amount: XX.XX}</p>
    <p>You will want to send the transaction to the account: 86753091</p>
    <p>You have intercepted the following hex string: </p>

    <?php
      $key = 'WhatIsLove';
      $origTrans = "{Account: 97839202, Amount: 250.00}";
      $bitStream = '';

    ?>
  </body>
</html>
