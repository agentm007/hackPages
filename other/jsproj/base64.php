<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Base64 Converter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php
      require '/var/www/html/hack/bootimport.php';
   ?>
    <script>
     var base = new Map();
      base.set('A', '000000'); base.set('B', '000001'); base.set('C', '000010'); base.set('D', '000011'); base.set('E', '000100'); base.set('F', '000101');
      base.set('G', '000110'); base.set('H', '000111'); base.set('I', '001000'); base.set('J', '001001'); base.set('K', '001010'); base.set('L', '001011');
      base.set('M', '001100'); base.set('N', '001101'); base.set('O', '001110'); base.set('P', '001111'); base.set('Q', '010000'); base.set('R', '010001');
      base.set('S', '010010'); base.set('T', '010011'); base.set('U', '010100'); base.set('V', '010101'); base.set('W', '010110'); base.set('X', '010111');
      base.set('Y', '011000'); base.set('Z', '011001'); base.set('a', '011010'); base.set('b', '011011'); base.set('c', '011100'); base.set('d', '011101');
      base.set('e', '011110'); base.set('f', '011111'); base.set('g', '100000'); base.set('h', '100001'); base.set('i', '100010'); base.set('j', '100011');
      base.set('k', '100100'); base.set('l', '100101'); base.set('m', '100110'); base.set('n', '100111'); base.set('o', '101000'); base.set('p', '101001');
      base.set('q', '101010'); base.set('r', '101011'); base.set('s', '101100'); base.set('t', '101101'); base.set('u', '101110'); base.set('v', '101111');
      base.set('w', '110000'); base.set('x', '110001'); base.set('y', '110010'); base.set('z', '110011'); base.set('0', '110100'); base.set('1', '110101');
      base.set('2', '110110'); base.set('3', '110111'); base.set('4', '111000'); base.set('5', '111001'); base.set('6', '111010'); base.set('7', '111011');
      base.set('8', '111100'); base.set('9', '111101'); base.set('+', '111110'); base.set('/', '111111');
    
    function b64ToBin(value){
      len = value.length;
      ans = '';
      for(i=0; i< len; i++){
        if(base.has(value[i]))
          ans += base.get(value[i]);
        else
          ans += NaN
        }
      return ans;
    }

    function convert(){
      if(document.getElementById("base64").checked){
        document.getElementById("output").value = btoa(document.getElementById("input").value);
      }
      else if(document.getElementById("ascii").checked){
        document.getElementById("output").value = atob(document.getElementById("input").value);
      }
      else if(document.getElementById("b64tobin").checked){
        document.getElementById("output").value = b64ToBin(document.getElementById("input").value);
      }
    }
    </script>
  </head>
  <body style="">
    <?php
      require '/var/www/html/hack/nav.php';
    ?>
    <div class="jumbotron jumbotron-fluid blog-header text-center bg-dark">
      <h1 style="color:white">Base64 Converter</h1>
    </div>
    <div class="container">

      <p></p>

    <textarea id="input" rows="4" cols="70"></textarea>
    <br />
    <br />
    <input type="radio" name="base64" id="base64" checked="checked" />To Base64
    <input type="radio" name="base64" id="ascii" />To ASCII
    <input type="radio" name="base64" id="b64tobin" />Base64 To Bin
    <input type="radio" name="base64" id="bintob64" />Bin To Base64
    <button type="button" onclick="convert()">Convert</button><br /><br />
    <textarea id="output" rows="4" cols="70"></textarea>

    </div>
  </body>
</html>
