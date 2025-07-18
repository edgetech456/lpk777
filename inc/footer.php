<footer class="footer w-100 fixed-bottom" id="mastfoot">
    <div class="row px-4 py-2 m-auto w-100">
        <a href="<?php echo $site_base_url;?>" class="d-flex flex-column col align-items-center justify-content-center h-100 p-0">
            <img src="<?php echo $site_base_url;?>images/footer-home.png" class="icon img-fit" alt="Halaman Utama">
            <span class="text-center">Halaman Utama</span>
        </a>
        <a href="<?php echo $site_base_url;?>bonus-promosi" class="d-flex flex-column col align-items-center justify-content-center h-100 p-0">
            <img src="<?php echo $site_base_url;?>images/footer-commission.png" class="icon img-fit" alt="Referrer">
            <span class="text-center">Promosi</span>
        </a>
        <a href="#" class="d-flex flex-column col align-items-center justify-content-center h-100 p-0">
            <img src="<?php echo $site_base_url;?>images/footer-deposit.png" class="icon img-fit" alt="Deposit">
            <span class="text-center">Referrer</span>
        </a>
        <a href="<?php echo $site_base_url;?>hubungi-kami" class="d-flex flex-column col align-items-center justify-content-center h-100 p-0">
            <img src="<?php echo $site_base_url;?>images/footer-live_chat.png" class="icon img-fit" alt="Hubungi Kami">
            <span class="text-center">Hubungi Kami</span>
        </a>
    </div>
    <script type="text/javascript" src="<?php echo $site_base_url;?>js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo $site_base_url;?>js/swiper-bundle.min.js"></script>
    <script type="text/javascript" id="scripts-extra">
    <?php
        $localize = [
            "site_url" => $site_base_url,
        ];
        $localizeScripts = json_encode($localize, JSON_FORCE_OBJECT);
    ?>
        var global = <?php echo $localizeScripts;?>;
    </script>
    <script type="text/javascript" id="scripts" src="<?php echo $site_base_url;?>js/scripts.js?v=<?php echo $version;?>"></script>
    <?php if( $page_slug == 'home' ) {
        $json_gameProvider = json_encode($gameProviders, JSON_FORCE_OBJECT);
        ?>
        <script id="scripts-home-extra">var gameProviders = <?php echo $json_gameProvider;?>;</script>
        <script id="scripts-home" type="text/javascript" src="<?php echo $site_base_url;?>js/scripts-home.js?v=<?php echo $version;?>"></script>
        <?php
    } 
    ?>
</footer>
<?php
if( isset($language_switcher) ) : // To be remove to turn on
?>
<div class="language-box">
    <div class="overlay"></div>
    <div class="language-box-inner">
        <div class="language-box-body text-center">
            <button type="button" class="btn btn-close" id="language-close"><span class="d-none">Close</span></button>
            <p>Region and Language</p>
            <?php
            if( $language == 'en' ) {
                $linkage = $site_base_url_en;
            }
            else {
                $linkage = $site_base_url;
            }
            $flag = $site_base_url.'images/icon-flag-sm-'.$language.'.png';
            $current_title = $available_languages[$language]['title'];
            echo '<div class="current-language"><img src="'.$flag.'" class="d-block mx-auto mb-3"/><p class="text-center mb-3">'.$current_title.'</p></div>';
            echo '<ul class="nav">';
            foreach( $available_languages as $key => $country ) {
                if( $language !== $key ) {
                    echo '<li class="nav-item text-center"><a href="javascript:void(0)" data-language="'.$key.'" data-page-index="'.$page_index.'">'.$country['title'].'</a></li>';
                }
            }
            echo '</ul>';
            ?>
        </div>
    </div>
</div>
<?php
endif; // To be remove to turn on
?>
