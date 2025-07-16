<footer class="footer w-100 fixed-bottom" id="mastfoot">
    <div class="row px-4 py-2 m-auto w-100">
        <a href="<?php echo $site_base_url_en;?>" class="d-flex flex-column col align-items-center justify-content-center h-100 p-0">
            <img src="<?php echo $site_base_url;?>images/footer-home.png" class="icon img-fit" alt="Halaman Utama">
            <span class="text-center">Home</span>
        </a>
        <a href="<?php echo $site_base_url_en;?>bonus-promotion" class="d-flex flex-column col align-items-center justify-content-center h-100 p-0">
            <img src="<?php echo $site_base_url;?>images/footer-commission.png" class="icon img-fit" alt="Referrer">
            <span class="text-center">Promotion</span>
        </a>
        <a href="<?php echo $site_base_url_en;?>slot" class="d-flex flex-column col align-items-center justify-content-center h-100 p-0">
            <img src="<?php echo $site_base_url;?>images/footer-deposit.png" class="icon img-fit" alt="Deposit">
            <span class="text-center">Slot</span>
        </a>
        <a href="<?php echo $site_base_url_en;?>contact-us" class="d-flex flex-column col align-items-center justify-content-center h-100 p-0">
            <img src="<?php echo $site_base_url;?>images/footer-live_chat.png" class="icon img-fit" alt="Hubungi Kami">
            <span class="text-center">Contact Us</span>
        </a>
    </div>
    <script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="./js/scripts.js"></script>
    <?php if( $page_slug == 'home' ) {
        $json_gameProvider = json_encode($gameProviders, JSON_FORCE_OBJECT);
        ?>
        <script id="scripts-home-extra">var gameProviders = <?php echo $json_gameProvider;?></script>
        <script id="scripts-home" type="text/javascript" src="./js/scripts-home.js"></script>
        <?php
    } 
    ?>
</footer>

