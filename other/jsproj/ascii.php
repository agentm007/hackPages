<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ASCII Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <h1 style="color:white">ASCII Table</h1>
    </div>
    <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Character</th>
          <th scope="col">Hexadecimal</th>
          <th scope="col">Decimal</th>
          <th scope="col">Octal</th>
          <th scope="col">Binary</th>
        </tr>
      </thead>
      <tbody>
      <script>
      var characters = [ "Null",  "SOH (start of heading)",
        "STX (start of text)",   "ETX (end of text)",
        "EOT (end of transmission)",  "ENQ (enquiry)",  "ACK (acknowledge)",
        "BEL (bell)", "BS (backspace)", "TAB (horizontal tab)",
        "LF (NL line feed, new line)", "VT (vertical tab)",
        "FF (NP for feed, new page)", "CR (carriage return)", "SO (shift out)",
        "SI (shift in)", "DEL (data link escape)", "DC1 (device control 1)",
        "DC2 (device control 2)", "DC3 (device control 3)",
        "DC4 (device control 4)", "NAK (negative acknowledge)",
        "SYN (synchronous idle)", "ETB (end of trans. block)", "CAN (cancel)",
        "EM (end of medium)", "SUB (substitute)", "ESC (escape)",
        "FS (file separator)", "GS (group separator)", "RS (record separator)",
        "US (record separator)", "Space"]

        for(i=0; i<33; i++){
          document.writeln("<tr><th scope=\"row\">" + characters.shift()  +
            "<//th><td>" + i.toString(16).padStart(2,'0') + "<//td><td>" +
            i + "<//td><td>" + i.toString(8).padStart(3,'0') + "<//td><td>" +
            i.toString(2).padStart(8,'0') + "<//td><//tr>")
        }
        for(i=33; i<127; i++){
          document.writeln("<tr><th scope=\"row\">" + String.fromCharCode(i) +
            "<//th><td>" + i.toString(16).padStart(2,'0') + "<//td><td>" +
            i + "<//td><td>" + i.toString(8).padStart(3,'0') + "<//td><td>" +
            i.toString(2).padStart(8,'0') + "<//td><//tr>")
        }
        </script>
        <tr>
          <th scope="row">DEL</th>
          <td>7f</td>
          <td>127</td>
          <td>177</td>
          <td>01111111</td>
        </tr>
      </tbody>
    </table>
    </div>
  </body>
</html>
