<?php
    if( $top_brands ) {
        $tb_index = 0;
        foreach( $top_brands as $key => $brand ) {
            $brand_title = $brand['title'];
            $brand_desc = $brand['description'];
            $brand_thumbnail = $site_base_url.'/images/top_brand/top_brand_'.$key.'.webp';
            $brand_link = $brand['url'];
        $disabled = ($tb_index > 0) ? ' disabled' : '';
    echo '<div class="top-brand-item w-100 '.$key.' p-2">
        <div class="top-brand-inner d-flex align-items-center justify-content-start">
            <div class="col col-header pt-3">
                <div class="col-image"><img src="'.$brand_thumbnail.'" alt="win111-instant-cashback-5-percent"/></div>
                <div class="col-title">'.$brand_title.'</div>
            </div>
            <div class="col col-desc pt-3">
                <p class="mb-0">'.$brand_desc.'</p>
            </div>
            <div class="col col-cta pt-3">
                <a href="'.$brand_link.'" class="btn btn-visit" rel="nofollow noreferrer noopener"'.$disabled.'><span>VISIT</span></a>
            </div>
        </div>
    </div>';
            $tb_index++;
        }
    }
?>
