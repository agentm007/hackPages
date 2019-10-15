<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Python Generals</title>
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
      <h1 style="color:white">Python Generals</h1>
    </div>
    <div class="container">
      <h2>Python Functions</h2>
      <p>To define a function in python simply put enter in “def” the function
         name, the function arguments and finally the function code. Use the
         return statement to return a value.</p>
      <h3>Examples</h3>
      <pre><code>def testfunction(name):
    print("Hello " + name)
</code></pre>

      <h2>Python list and Dictionary Compression</h2>
      <p>In python lists can be created in a compressed format.
         Syntax:<code> x = [expression for item in list if conditional]</code></p>
      <p>Helpful link <a href="https://www.pythonforbeginners.com/basics/list-comprehensions-in-python">list compression</a></p>
      <h3>Examples</h3>
      <pre><code>x = [i for i in range(10)]
print x
[0, 1, 2, 3, 4, 5, 6, 7, 8, 9]</code></pre>

    <h2></h2>
    <p></p>
    </div>
  </body>
</html>
