<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Common Database commands and Information</title>
    <meta charset="utf-8">
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <?php
      require '/var/www/html/hack/bootimport.php';
    ?>
  </head>
  <body>
    <?php
      require '/var/www/html/hack/nav.php'
    ?>
    <div class="jumbotron jumbotron-fluid blog-header text-center bg-dark">
      <h1 style="color:white">Common Database commands and Information</h1>
    </div>
    <div class="container">
      <h1>Postgres</h1>
      <p>Show database \l \list</p>
      <p>Show Tables \dt </p>
      <p>Describe Table \d table</p>
      <p>Detailed Describe Table \d+ table</p>
      <p>Change databases \c \connect</p>
      <p>Quit: \q \quit</p>
      <p>Create a database from command line: createdb -O user dbname</p>
      <p></p>
      <h1>Mysql</h1>
      <p>Show Databases: show databases;</p>
      <p>Connect to a database: use table;</p>
      <p>Show Tables: show tables;</p>
      <p>Describe Table: describe table;</p>
      <p>Quit: quit</p>
    </div>
  </body>
</html>
