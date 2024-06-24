<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $stylesheet; ?>">
  <title>A Table for You &bull; <?php echo $pageTitle; ?></title>
</head>
<body>
  <main>
    <section class="title">
    <header class="backdrop">
    <h1>A Table for You by Chef José</h1>
    </header>
    </section>

    
    <?php
    include 'nav.inc.php';

    $current_page = basename(htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8'));

if ($current_page == 'sample-menus.php') {
    echo '<section class="sample-menu-intro">
   <h3>Curate Your Bespoke Culinary Experience</h3>

<p>Embark on a collaborative journey with Chef José to design a menu that reflects your refined tastes and the unique character of your occasion. Our sample menus are merely a starting point—your imagination is the limit:</p>

<h4>Ambiance and Occasion</h4>
<p>Describe the desired atmosphere, whether it\'s an intimate soirée, a celebratory gala, or an executive luncheon. Share details about the venue and any specific themes or preferences.</p>

<h4>Guest Profiles & Preferences</h4>
<p>Inform us of any dietary restrictions, allergies, or special requests to ensure a seamless and delightful experience for all your guests. Share any insights into their preferred flavors or culinary styles.</p>

<h4>Culinary Inspirations</h4>
<p>Indulge us with your culinary desires. Are you drawn to a particular region\'s cuisine, a specific era\'s culinary traditions, or perhaps a fusion of flavors? The possibilities are endless.</p>

<h4>Additional Considerations</h4>
<p>Share any supplementary requests that will elevate your experience, such as bespoke cocktails, personalized desserts, or unique table settings.</p>

    </section>'; 
} 
    ?>

  