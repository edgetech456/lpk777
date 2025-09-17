<?php
$localhost = array('127,0,0,1', 'localhost', '::1');
if ( !in_array( $_SERVER['REMOTE_ADDR'], $localhost ) ) {
    $site_base_url = 'https://lpk-777.com/';
    $site_base_url_en = 'https://lpk-777.com/en/';
}
else {
    $site_base_url = 'http://localhost/lpk777/';
    $site_base_url_en = 'http://localhost/lpk777/en/';
}
$site_title = 'LPK777';
if( !empty($page_name) ) {
    $page_prefix = $page_name . ' | ';
}
else {
    $page_prefix = '';
}
$page_title = $page_prefix.' '.$site_title;
$page_url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$version = '1.0.'.time();
$language = 'bm';
$available_languages = [
    "bm" => [
        "title" => "Bahasa Malaysia", 
        "icon" => "icon-flag-sm-bm.png", 
    ],
    "en" => [
        "title" => "English", 
        "icon" => "icon-flag-sm-en.png", 
    ]
];
$menu_items = [
    [
        "title" => "Slot",
        "url" => "slot",
        "target" => "_self",
    ],
    [
        "title" => "Muat Turun APK",
        "url" => "muat-turun-apk",
        "target" => "_self",
    ],
    [
        "title" => "VIP",
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
        "title" => "Hubungi Kami",
        "url" => "hubungi-kami",
        "target" => "_self",
    ],
];

$disclaimer_items = [
    [
        "title" => "Perjudian Bertanggungjawab",
        "url" => "perjudian-bertanggungjawab",
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
];

// $menu_items_en = [
//     [
//         "title" => "Slot",
//         "url" => "slot",
//         "target" => "_self",
//     ],
//     [
//         "title" => "Download APK",
//         "url" => "download-apk",
//         "target" => "_self",
//     ],
//     [
//         "title" => "VIP Programme in LPK777",
//         "url" => "vip",
//         "target" => "_self",
//     ],
//     [
//         "title" => "Payment Method",
//         "url" => "payment-method",
//         "target" => "_self",
//     ],
//     [
//         "title" => "Bonus & Promotion",
//         "url" => "bonus-promotion",
//         "target" => "_self",
//     ],
//     [
//         "title" => "Responsible Gaming",
//         "url" => "responsible-gaming",
//         "target" => "_self",
//     ],
//     [
//         "title" => "Privacy Policy",
//         "url" => "privacy-policy",
//         "target" => "_self",
//     ],
//     [
//         "title" => "Terms & Conditions",
//         "url" => "termas-conditions",
//         "target" => "_self",
//     ],
//     [
//         "title" => "Contact Us",
//         "url" => "contact-us",
//         "target" => "_self",
//     ],
// ];
$gameProviders = [
    "slot" => [
        "title" => "Web Slots",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/slot.png",
        "games" => [
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/uu_free.png?20250714171", 
                "title" => "uu_free" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/uu.png?20250714171", 
                "title" => "uu" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/playtech.png?20250714171", 
                "title" => "playtech" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/pgslot.png?20250714171", 
                "title" => "pgslot" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/easytogo_mega888h5.png?20250714171", 
                "title" => "easytogo_mega888h5" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/easytogo_918kissh5.png?20250714171", 
                "title" => "easytogo_918kissh5" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/awc_spadegaming.png?20250714171", 
                "title" => "awc_spadegaming" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/mgp.png?20250714171", 
                "title" => "mgp" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/awc_jdb.png?20250714171", 
                "title" => "awc_jdb" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/pragmaticplay.png?20250714171", 
                "title" => "pragmaticplay" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/habanero.png?20250714171", 
                "title" => "habanero" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/joker.png?20250714171", 
                "title" => "joker" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/nextspin.png?20250714171", 
                "title" => "nextspin" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/awc_jili.png?20250714171", 
                "title" => "awc_jili" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/cq9.png?20250714171", 
                "title" => "cq9" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/fachai.png?20250714171", 
                "title" => "fachai" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/jqk_lucky365.png?20250714171", 
                "title" => "jqk_lucky365" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/easytogo_ace333.png?20250714171", 
                "title" => "easytogo_ace333" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/gw99.png?20250714171", 
                "title" => "gw99" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/evo888h5.png?20250714171", 
                "title" => "evo888h5" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/slot/pegasus.png?20250714171", 
                "title" => "pegasus" 
            ],
        ]
    ],
    "marble-run" => [
        "title" => "Marble Run",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/marble-run.png",
        "games" => [
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/marble-run/marbula2.png?20250714171", 
                "title" => "marbula2" 
            ],
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/marble-run/marbula2_free.png?20250714171", 
                "title" => "marbula2_free" 
            ],
        ]
    ],
    "game-711" => [
        "title" => "App Slots",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/game-711.png",
        "games" => [
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/game-711/mega888a.png?20250714171",
                "title" => "mega888a"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/game-711/s918kissa.png?20250714171",
                "title" => "s918kissa"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/game-711/pussy888a.png?20250714171",
                "title" => "pussy888a"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/game-711/jqk_lionking.png?20250714171",
                "title" => "jqk_lionking"
            ],
        ]
    ],
    "live-dealer" => [
        "title" => "Live Casino",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/live-dealer.png",
        "games" => [
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/evolution.png?20250714171",
                "title" => "evolution"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/pragmaticplay.png?20250714171",
                "title" => "pragmaticplay"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/playtech.png?20250714171",
                "title" => "playtech"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/awc_sexygaming.png?20250714171",
                "title" => "awc_sexygaming"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/dreamgame.png?20250714171",
                "title" => "dreamgame"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/mgp.png?20250714171",
                "title" => "mgp"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/live-dealer/pegasus.png?20250714171",
                "title" => "pegasus"
            ],
        ]
    ],
    "fishing" => [
        "title" => "Fishing",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/fishing.png",
        "games" => [
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/awc_jili.png?20250714171",
                "title" => "awc_jili"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/awc_spadegaming.png?20250714171",
                "title" => "awc_spadegaming"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/joker.png?20250714171",
                "title" => "joker"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/cq9.png?20250714171",
                "title" => "cq9"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/fachai.png?20250714171",
                "title" => "fachai"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/awc_jdb.png?20250714171",
                "title" => "awc_jdb"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/fishing/gw99.png?20250714171",
                "title" => "gw99"
            ],
        ]
    ],
    "sport" => [
        "title" => "Sportbook",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/sport.png",
        "games" => [
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/sport/ssport.png?20250714171",
                "title" => "ssport"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/sport/cmd.png?20250714171",
                "title" => "cmd"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/sport/m8sport.png?20250714171",
                "title" => "m8sport"
            ],
        ]
    ],
    "loteri" => [
        "title" => "Loteri",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/lottery.png",
        "games" => [
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/lottery/abs.png?20250714171", 
                "title" => "abs" 
            ],
        ]
    ],
    "p2p" => [
        "title" => "P2P",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/p2p.png",
        "games" => [
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/p2p/awc_kingmaker.png?20250714171",
                "title" => "awc_kingmaker"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/p2p/habanero.png?20250714171",
                "title" => "habanero"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/p2p/awc_jili.png?20250714171",
                "title" => "awc_jili"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/p2p/cq9.png?20250714171",
                "title" => "cq9"
            ],
            [
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/p2p/gw99.png?20250714171",
                "title" => "gw99"
            ],
        ]
    ],
    "cockfight" => [
        "title" => "Cockfight",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/cockfight.png",
        "games" => [
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/cockfight/awc_sv388.png?20250714171", 
                "title" => "awc_sv388" 
            ],
        ]
    ],
    "horseracing" => [
        "title" => "Horse Racing",
        "icon" => "https://maltese9.protonz-cdn.com/public/assets/global_home/provider_logo/horseracing.png",
        "games" => [
            [ 
                "thumbnail" => "https://maltese9.protonz-cdn.com/public/assets/provider/global_merchant/horseracing/awc_horsebook.png?20250714171", 
                "title" => "awc_horsebook" 
            ],
        ]
    ],
];
$top_brands = [
    "win111" => [
        "title" => "WIN111",
        "description" => "140% Welcome Bonus Instantly",
        "url" => "https://tinyurl.com/2whdnxb2",
    ],
    "winboleh" => [
        "title" => "Winboleh",
        "description" => "Welcome bonus RM888 140%",
        "url" => "http://mplanding2.winboleh1.com/",
    ],
    "kaya88" => [
        "title" => "KAYA88",
        "description" => "Welcome bonus 60%",
        "url" => "https://kayabet88.com/register/referer/86b284c3b1",
    ],
    "klwin" => [
        "title" => "KLWIN",
        "description" => "First deposit<br/>30 dpt 60<br/>100 dpt 200",
        "url" => "https://klwin111.com/register/referer/c6a6dd69be",
    ],
    "winmy" => [
        "title" => "WINMY",
        "description" => "DAILY FREE CREDIT UP TO 88.88",
        "url" => "https://winmy.asia/register/referer/a6e0ace56f",
    ],
    "kaya96" => [
        "title" => "Kaya96",
        "description" => "20% weekend bonus",
        "url" => "https://kaya96.com/register/referer/08fadc27ba",
    ],
];
?>