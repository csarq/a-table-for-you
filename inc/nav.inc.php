 <nav class="nav">
    <ul>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'style="background-color: lightblue;"'; ?>>
            <a href="index.php">Home</a>
        </li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'sample-menus.php') echo 'style="background-color: lightblue;"'; ?>>
            <a href="sample-menus.php">Sample Menus</a>
        </li>
        <li <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'style="background-color: lightblue;"'; ?>>
            <a href="about.php">About</a></li>
    </ul>
      </nav> 