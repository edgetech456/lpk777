<?php
$menu_items = [
    [
        "title" => "Slot",
        "url" => "slot",
        "target" => "_self",
    ],
    [
        "title" => "Muat Turun Aplikasi",
        "url" => "muat-turun-apk",
        "target" => "_self",
    ],
    [
        "title" => "Program VIP di LPK777",
        "url" => "vip",
        "target" => "_self",
    ],
    [
        "title" => "Kaedah Pembayaran",
        "url" => "kaedah-pembayaran",
        "target" => "_self",
    ],
    [
        "title" => "Bonus & Promosi",
        "url" => "bonus-promosi",
        "target" => "_self",
    ],
    [
        "title" => "Perjudian Bertanggungjawab",
        "url" => "perjudian-bertanggungjawab ",
        "target" => "_self",
    ],
    [
        "title" => "Dasar Privasi",
        "url" => "dasar-privasi",
        "target" => "_self",
    ],
    [
        "title" => "Terma Syarat",
        "url" => "terma-syarat",
        "target" => "_self",
    ],
    [
        "title" => "Hubungi Kami",
        "url" => "hubungi-kami",
        "target" => "_self",
    ],
];
?>
<header class="masthead" id="masthead">
    <nav class="navbar rounded px-4 py-2">
        <div class="navbar-row">
            <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="d-none">Open Mobile Menu</span>
                <div class="quad-box">
                    <div class="quad-inner"></div>
                </div>
            </button>
            <a href="<?php echo $site_base_url;?>" class="navbar-brand">
                <span class="d-none">Home</span>
                <img src="<?php echo $site_base_url;?>images/lpk777_logo.png" alt="LPK777 Logo" class="img-fit">
            </a>
            <div></div>
            <div class="collapse navbar-collapse justify-content-xl-end" id="main-navigation">
                <div class="navbar-collapse-inner">
                    <h4 class="d-block text-center p-4 py-2 title-logo"><a href="<?php echo $site_base_url;?>" class="d-block"><img src="<?php echo $site_base_url;?>images/lpk777_logo.png" alt="LPK777 Logo" class="img-fit mx-auto"></a></h4>
                    <button type="button" class="navbar-close" aria-label="Close menu">
                        <span class="d-none">Close Mobile Menu</span>
                    </button>
                    <ul class="navbar-nav nav w-100 w-xl-auto p-4 px-0 px-md-4 p-xl-0">
                        <li class="nav-item d-xl-none">
                            <a href="<?php echo $site_base_url;?>" class="nav-link">Home</a>
                        </li>
                        <?php foreach( $menu_items as $item ) {
                            $title = $item['title'];
                            $url = $item['url'];
                            $target = $item['target'];
                        ?>
                            <li class="nav-item">
                                <a href="<?php echo $site_base_url.$url;?>" target="<?php echo $target;?>" class="nav-link"><?php echo $title;?></a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>