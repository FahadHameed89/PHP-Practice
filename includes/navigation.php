<?php 
    // We will create a navigation element that will be used throughout the website. 
    $navArray = array(
        'Home' => 'index.php',
        'About' => 'about.php'
    );
?>
<nav>
    <h2> Website Naviation</h2>
        <ul>
        <?php foreach ( $navArray as $pageName => $link ) : ?>
            <li>
                <a href="<?php echo $link; ?>">
                <?php echo $pageName; ?>
            </li>
        <?php endforeach; ?>
        </ul>
</nav>
