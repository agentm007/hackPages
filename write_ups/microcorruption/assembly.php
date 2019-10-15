<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Microcorruption Write ups</title>
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
      <h1 style="color:white">Assembly from Microcorruption Reference</h1>
    </div>
    <div class="container">
      <h2>General</h2>
        <ul>
          <li>@ indicates a address</li>
          <li># indicates a value</li>
        </ul>

      <h2>Instructions</h2>
        <ul>
          <li>inc increment: Add one to the value</li>
          <li>mov src dst:</li>
          <li>mov.b src dst: move byte from source address to destination</li>
          <li>add src dst: add the source to the destination</li>
          <li>call add: Call changes the Program Counter to address value</li>
          <li>cmp val val: Compare value 1 with value 2 if they are equal set
           the zero flag</li>
          <li>clr val: clear the value</li>
          <li>tst val: test if value is zero. If not zero set Carry flag(c). If
           value is zero set the Carry Zero flag(cz)</li>
          <li>push val: Push 2 bytes from the current value to the top of the
           stack and incriment the stack pointer "sp" by 2 remeber revers order
           on the stack</li>
          <li>pop  val: Pop
          <li>jnz: Jump if carry(c) flag set. Don't jump if Carry Zero(cz) flag
           set</li>
          <li>jeq: Jump if Carray Zero(CZ) flag set. Don't jump if Not Equal(N)
           flag set</li>
        </ul>

      <h2>Functions</h2>
        <ul>
          <li>main: The main function</li>
          <li>INT: user input</li>
          <li>unlock_door: unlock the door</li>
        </ul>

      <h2>Flags</h2>
        <ul>
          <li>sr 0000 No flags:  0000 0000 0000 0000</li>
          <li>sr 0001 Carry flag(c): 0000 0000 0000 0001</li>
          <li>sr 0003 Carry Zero(cz): 0000 0000 0000 0011</li>
          <li>sr 0004 Not Equal flag(N): 0000 0000 0000 0100</li>
        </ul>

      <h2>Registers</h2>
        <ul>
          <li>pc: Program counter. This is where the program is at right now</li>
          <li>sp: Stack Pointer.</li>
          <li>sr: Flags register similar to cflag</li>
        </ul>



    </div>
  </body>
</html>
