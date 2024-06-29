<?php
$stylesheet = 'sample-menus.css';
$pageTitle = 'Sample Menus';
$title_area = 'title-area-slim';
include 'inc/sitegrid-nav.inc.php';
?>

<section class="menusList">
    <ul>
        <li><a href="starters.php">Starters</a></li>
        <li><a href="mains.php">Mains</a></li>
        <li><a href="desserts.php">Desserts</a></li>
    </ul>
</section>

<?php  $current_page = basename(htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8'));

if ($current_page == 'sample-menus.php') {
    echo '<section class="sample-menu-intro">
   <h3>Curate Your Bespoke Culinary Experience</h3>

<p>Embark on a collaborative journey with Chef José to design a menu that reflects your refined tastes and the unique character of your occasion. Our sample menus are merely a starting point—your imagination is the limit:</p>

<h4>Guest Profiles & Preferences</h4>
<p>Inform us of any dietary restrictions, allergies, or special requests to ensure a seamless and delightful experience for all your guests. </p>

<h4>Culinary Inspirations</h4>
<p>Indulge us with your culinary desires. Are you drawn to a particular region\'s cuisine, a specific era\'s culinary traditions, or perhaps a fusion of flavors? The possibilities are endless.</p>

<h4>Additional Considerations</h4>
<p>Share any supplementary requests that will elevate your experience, such as personalised desserts, or unique table settings.</p>

    </section>'; 
} 
    ?>