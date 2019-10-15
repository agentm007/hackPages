<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Networking Hints</title>
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
      <h1 style="color:white">Networking Hints</h1>
    </div>
    <div class="container">
      <p>Here are some general hints for working Networking.</p>
      <h2>Value conversion chart</h2>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Decimal</th>
            <th scope="col">Hexadecimal</th>
            <th scope="col">Binary</th>
            <th scope="col">Octal</th>
          </tr>
        </thead>
      <script>
        for(i=0; i<16; i++){
          document.writeln("<tr><th scope=\"row\">" + i + "<//th><td>" +
            i.toString(16).toUpperCase() + "<//td><td>" + i.toString(2).padStart(4,'0') +
            "<//td><td>" + i.toString(8) + "<//td><//tr>")
        }
      </script>
      </table>

      <h2>IP Classes Chart</h2>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Class</th>
            <th scope="col">Range</th>
            <th scope="col">Bits</th>
            <th scope="col">Network Bits</th>
            <th scope="col">Number of Networks</th>
            <th scope="col">Hosts</th>
          </tr>
        </thead>

      </table>
        
      <script>
    </div>
  </body>
</html>
