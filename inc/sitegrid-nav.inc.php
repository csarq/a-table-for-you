<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sitegrid-nav.css">
  <link rel="stylesheet" href="<?php echo $stylesheet; ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap" rel="stylesheet">
  <title>A Table for You &bull; <?php echo $pageTitle; ?></title>
</head>
<body>
  <main>
    <section class="<?php echo $title_area; ?> title">
    <header class="backdrop">
    <h1 class="noto-sans-h1">A Table for You</h1>
    </header>
    </section>

   <!-- Dynamic Styling with PHP: Within each <li> tag, there's a PHP conditional statement that checks if the current script's name matches the name of the page linked by the <a> tag within that list item. This is achieved by:

Using $_SERVER['SCRIPT_NAME'] to get the path of the current script being executed.
Wrapping it with htmlspecialchars() to convert special characters to HTML entities, preventing XSS (Cross-Site Scripting) attacks. The ENT_QUOTES flag ensures both double and single quotes are converted, and 'UTF-8' specifies the character encoding.
Applying basename() to extract the filename from the path, which is then compared to the name of the page (e.g., index.php).
If the current page's filename matches the one specified in the condition, PHP executes the echo statement to add a style attribute with a value of background-color: lightblue; to the <li> tag, highlighting it.
  -->

<nav class="nav">
   <ul>
       <li>
           <a href="index.php" <?php if (basename(htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8')) == 'index.php') echo 'style="background-color: lightblue;"'; ?>>Home</a>
       </li>
       <li>
           <a href="sample-menus.php" <?php if (basename(htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8')) == 'sample-menus.php') echo 'style="background-color: lightblue;"'; ?>>Sample Menus</a>
       </li>
       <li>
           <a href="about.php" <?php if (basename(htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8')) == 'about.php') echo 'style="background-color: lightblue;"'; ?>>About</a></li>
   </ul>
</nav>
   

  