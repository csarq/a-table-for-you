 <!-- Dynamic Styling with PHP: Within each <li> tag, there's a PHP conditional statement that checks if the current script's name matches the name of the page linked by the <a> tag within that list item. This is achieved by:

Using $_SERVER['SCRIPT_NAME'] to get the path of the current script being executed.
Wrapping it with htmlspecialchars() to convert special characters to HTML entities, preventing XSS (Cross-Site Scripting) attacks. The ENT_QUOTES flag ensures both double and single quotes are converted, and 'UTF-8' specifies the character encoding.
Applying basename() to extract the filename from the path, which is then compared to the name of the page (e.g., index.php).
If the current page's filename matches the one specified in the condition, PHP executes the echo statement to add a style attribute with a value of background-color: lightblue; to the <li> tag, highlighting it.
  -->

<nav class="nav">
   <ul>
       <li <?php if (basename(htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8')) == 'index.php') echo 'style="background-color: lightblue;"'; ?>>
           <a href="index.php">Home</a>
       </li>
       <li <?php if (basename(htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8')) == 'sample-menus.php') echo 'style="background-color: lightblue;"'; ?>>
           <a href="sample-menus.php">Sample Menus</a>
       </li>
       <li <?php if (basename(htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8')) == 'about.php') echo 'style="background-color: lightblue;"'; ?>>
           <a href="about.php">About</a></li>
   </ul>
</nav>