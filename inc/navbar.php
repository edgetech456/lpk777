<?php
$current_url = trim($_SERVER['REQUEST_URI'], "/");
?>
<header class="masthead" id="masthead">
    <nav class="navbar rounded px-4 py-2">
        <div class="navbar-row">
            <button type="button" class="navbar-toggler collapsed filter-black-to-white" data-bs-toggle="collapse" data-bs-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="d-none">Open Mobile Menu</span>
                <img src="<?php echo $site_base_url;?>images/icon-menu.png"/>
            </button>
            <a href="<?php echo $site_base_url;?>" class="navbar-brand">
                <span class="d-none">Home</span>
                <picture>
                    <source srcset="./images/lpk777_logo.webp" type="image/webp">
                    <source srcset="./images/lpk777_logo.png" type="image/png">
                    <img src="<?php echo $site_base_url;?>images/lpk777_logo.png" alt="lpk777-logo" class="img-fit">
                </picture>
            </a>
            <div></div>
            <div class="collapse navbar-collapse justify-content-xl-end" id="main-navigation">
                <div class="navbar-collapse-inner">
                    <h4 class="d-block text-center p-4 py-2 title-logo mb-0"><a href="<?php echo $site_base_url;?>" class="d-block"><img src="<?php echo $site_base_url;?>images/lpk777_logo.png" alt="lpk777-logo" class="img-fit mx-auto"></a></h4>
                    <button type="button" class="navbar-close" aria-label="Close menu">
                        <span class="d-none">Close Mobile Menu</span>
                    </button>
                    <div class="menu-wrapper d-flex flex-column justify-content-between">
                        <ul class="navbar-nav nav w-100 w-xl-auto p-4 px-0 p-xl-0" id="primary-menu">
                            <?php 
                            
                            $home_active = ( trim($current_url, "lpk777/") === "" ) ? ' active' : '';?>
                            <li class="nav-item home nav-item-0">
                                <a href="<?php echo $site_base_url;?>" class="nav-link<?php echo $home_active;?>">Home</a>
                            </li>
                            <?php 
                            foreach( $menu_items as $key => $item ) {
                                $index = intval($key)+1;
                                $title = $item['title'];
                                $url = $item['url'];
                                $target = $item['target'];
                                $is_active = str_contains($current_url, $item['url']) ? ' active' : '';
                            ?>
                                <li class="nav-item <?php echo $url;?> nav-item-<?php echo $index;?>">
                                    <a href="<?php echo $site_base_url.$url;?>" target="<?php echo $target;?>" class="nav-link<?php echo $is_active;?>"><?php echo $title;?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                        
                        <ul class="navbar-nav nav w-100 w-xl-auto p-4 px-0 p-xl-0" id="disclaimer-menu">
                            <?php foreach( $disclaimer_items as $dkey => $ditem ) {
                                // $index = intval($key)+1;
                                $dtitle = $ditem['title'];
                                $durl = $ditem['url'];
                                $dtarget = $ditem['target'];
                                $dis_active = str_contains($current_url, $ditem['url']) ? ' active' : '';
                            ?>
                                <li class="nav-item <?php echo $durl;?>">
                                    <a href="<?php echo $site_base_url.$durl;?>" target="<?php echo $dtarget;?>" class="nav-link<?php echo $dis_active;?>"><?php echo $dtitle;?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>