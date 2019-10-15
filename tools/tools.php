<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Common Vim Commands</title>
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
      <h1 style="color:white">Common Vim Commands</h1>
    </div>
    <div class="container">
    <h2>Description</h2>
    <p>Below I have some of the more common vim commands that I use. For more
    information on vim read the man page or look online</p>
    <h2>Basics</h2>
    <p>Vim has several modes. You will mostly be using insert mode and normal
       mode. Insert mode is for typing in text uninterrupted. While in Insert
       mode you will be able to type, move around with the arrow keys and not
       much else. Insert mode is pretty much just for typing in text. Standard
       mode on the other hand allows you to quickly modify the document and has
       many commands. Some of the more basic commands are listed below. Please
       note that you can add a number before pretty much any command to get it
       to repeat multiple times.</p>
    <ul>
      <li><code>h</code> move right one character</li>
      <li><code>l</code> move left one character</li>
      <li><code>j</code> move down one character</li>
      <li><code>k</code> move up one character</li>
      <li><code>x</code> delete one character</li>
      <li><code>dw</code> delete one word</li>
      <li><code>dd</code> delete one line</li>
      <li><code>:q</code> quit vim</li>
      <li><code>:w</code> save file</li>
      <li><code>u</code> undo</li>
      <li><code>.</code> redo</li>
      <li><code>R</code> replace/overwrite</li>
      <li><code>r</code> replace one character</li>
      <li><code>s</code> substitute one character then enter insert mode</li>
      <li><code>esc</code> exit insert mode</li>
      <li><code>/</code> search for a string</li>
      <li><code>n</code> repeat last search forward</li>
      <li><code>N</code> repeat last search backward</li>
      <li><code>A</code> enter insert mode at end of line</li>
      <li><code>a</code> enter insert mode next character</li>
    </ul>

    <h2>Turn on/off Line numbers</h2>
    <p>:set number</p>
    <p>:set nonumber</p>

    <h2>Delete All items between tags</h2>
    <p>From normal mode go to the tags in question. Then enter in <code>dit</code>.
    This will delete all text between tags. To delete all text between other
    things enter in <code>di</code> and then the opening thing ex. to delete all text
    within a tag enter in <code>di&lt;</code></p>

    <h2>Change all tabs to spaces</h2>
    <p>In command mode enter in <code>:retab</code> this will change all indents to
    the number of spaces you have set up in your vim config files</p>

    <h2>Combine two lines</h2>
    <p><code>J</code> will combine two lines into a single line</p>

    <h2>Creating vim Macros</h2>
    <p>Vim macros are an easy way to perform a repetitive task multiple times.
       Any time you find yourself performing a set of commands multiple times in
       a row write a macro to do it.</p>
    <h3>Recording a macro</h3>
    <code>q (letter) (commands) q</code>
    <h3>Execute a macro</h3>
    <code>(number) @ (letter)</code><br />
    <p><code>@ @</code> run previous macro</p>
    <h3>View recorded macros</h3>
    <code>:reg</code><br />

    <h2>My Personal Vimrc</h2>
    <p><pre><code>scriptencoding utf-8
set encoding=utf-8

set nowrap
set number
set mouse-=a
syntax on
filetype plugin indent on
set expandtab
set tabstop=2
set shiftwidth=2
set list
set ruler
set backspace=indent,eol,start
set autoindent
set visualbell
set confirm
set listchars=trail:·,space:·

if has("autocmd")
  au BufReadPost * if line("'\"") > 0 && line("'\"") <= line("$")
    \| exe "normal! g'\"" | endif
endif
</code></pre></p>


    </div>
  </body>
</html>
