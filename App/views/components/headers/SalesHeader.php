<?php 
    global $config;
    $userName = $_SESSION["userName"] 
?>
<header>
    <div class="logo">
        <img src="<?= $config["FILES"]["IMAGES"]; ?>Logo 2.png" alt="Logo maneira" />
        <span>
            <h3>TechStock</h3>
            <p><b>Sales</b></p>
        </span>
    </div>

    <div class="menuLinks">
        <div><?= $userName ?></div>
        <button id="logout" class=""><i data-feather="log-out"></i></button>
        
    </div>
</header>