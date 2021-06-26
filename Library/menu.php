<link type = "text/css" rel="stylesheet" href="../plugin/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="../plugin/jquery/jquery-2.0.2.min.js"></script>
<script type="text/javascript" src="../plugin/bootstrap/js/bootstrap.min.js"></script>


<div class="navbar">
    <ul class="nav navbar-nav">
        <?php
        include "../Library/function_menu.php";
        session_start();
        $_SESSION['leveluser'] ="admin";
        buat_menu("dashboard", "home", "Dashboard", array("admin", "autthor"));
        buka_dropdown("book","content", array("admin", "author"));
        buat_submenu("content1", "content 1", array("admin", "author"));
        buat_submenu("content2", "content 2", array("admin", "author"));
        buat_submenu("content3", "content 3", array("admin", "author"));
        tutup_dropdown(array("admin", "author"));
        buat_menu("about", "file", "about", array ("admin", "author"));
        
        ?>
    </ul>
</div>