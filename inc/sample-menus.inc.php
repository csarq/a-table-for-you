<?php
$stylesheet = 'menu-header.css';
$pageTitle = 'Sample Menus';
include 'inc/alt-header.inc.php';
?>

<section class="menusList">
    <ul>
        <li><a href="starters.php">Starters</a></li>
        <li><a href="mains.php">Mains</a></li>
        <li><a href="desserts.php">Desserts</a></li>
    </ul>
</section>

<section class="menuTitle">
    <h2><?php echo $sampleMenu?></h2>
</section>

<section class="menuItems">