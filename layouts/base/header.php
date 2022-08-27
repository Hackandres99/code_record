<header>
    <?php 
        ob_start();
        include 'header/menus/menu_items/models.php'; 
        include 'header/logo.php' 
    ?>

    <div class="menu_container">
        <?php 
            include 'header/menu.php';
            include 'header/buttons.php' 
        ?>
    </div>
</header>