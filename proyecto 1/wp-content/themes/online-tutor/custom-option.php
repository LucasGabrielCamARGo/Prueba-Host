<?php

    $online_tutor_theme_css= "";

    /*--------------------------- Scroll to top positions -------------------*/

    $online_tutor_scroll_position = get_theme_mod( 'online_tutor_scroll_top_position','Right');
    if($online_tutor_scroll_position == 'Right'){
        $online_tutor_theme_css .='#button{';
            $online_tutor_theme_css .='right: 20px;';
        $online_tutor_theme_css .='}';
    }else if($online_tutor_scroll_position == 'Left'){
        $online_tutor_theme_css .='#button{';
            $online_tutor_theme_css .='left: 20px;';
        $online_tutor_theme_css .='}';
    }else if($online_tutor_scroll_position == 'Center'){
        $online_tutor_theme_css .='#button{';
            $online_tutor_theme_css .='right: 50%;left: 50%;';
        $online_tutor_theme_css .='}';
    }

    /*--------------------------- Slider Image Opacity -------------------*/

    $online_tutor_slider_img_opacity = get_theme_mod( 'online_tutor_slider_opacity_color','');
    if($online_tutor_slider_img_opacity == '0'){
        $online_tutor_theme_css .='.slider-box img{';
            $online_tutor_theme_css .='opacity:0';
        $online_tutor_theme_css .='}';
        }else if($online_tutor_slider_img_opacity == '0.1'){
        $online_tutor_theme_css .='.slider-box img{';
            $online_tutor_theme_css .='opacity:0.1';
        $online_tutor_theme_css .='}';
        }else if($online_tutor_slider_img_opacity == '0.2'){
        $online_tutor_theme_css .='.slider-box img{';
            $online_tutor_theme_css .='opacity:0.2';
        $online_tutor_theme_css .='}';
        }else if($online_tutor_slider_img_opacity == '0.3'){
        $online_tutor_theme_css .='.slider-box img{';
            $online_tutor_theme_css .='opacity:0.3';
        $online_tutor_theme_css .='}';
        }else if($online_tutor_slider_img_opacity == '0.4'){
        $online_tutor_theme_css .='.slider-box img{';
            $online_tutor_theme_css .='opacity:0.4';
        $online_tutor_theme_css .='}';
        }else if($online_tutor_slider_img_opacity == '0.5'){
        $online_tutor_theme_css .='.slider-box img{';
            $online_tutor_theme_css .='opacity:0.5';
        $online_tutor_theme_css .='}';
        }else if($online_tutor_slider_img_opacity == '0.6'){
        $online_tutor_theme_css .='.slider-box img{';
            $online_tutor_theme_css .='opacity:0.6';
        $online_tutor_theme_css .='}';
        }else if($online_tutor_slider_img_opacity == '0.7'){
        $online_tutor_theme_css .='.slider-box img{';
            $online_tutor_theme_css .='opacity:0.7';
        $online_tutor_theme_css .='}';
        }else if($online_tutor_slider_img_opacity == '0.8'){
        $online_tutor_theme_css .='.slider-box img{';
            $online_tutor_theme_css .='opacity:0.8';
        $online_tutor_theme_css .='}';
        }else if($online_tutor_slider_img_opacity == '0.9'){
        $online_tutor_theme_css .='.slider-box img{';
            $online_tutor_theme_css .='opacity:0.9';
        $online_tutor_theme_css .='}';
        }

    /*---------------------------Slider Height ------------*/

    $online_tutor_slider_img_height = get_theme_mod('online_tutor_slider_img_height');
    if($online_tutor_slider_img_height != false){
        $online_tutor_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $online_tutor_theme_css .='height: '.esc_attr($online_tutor_slider_img_height).';';
        $online_tutor_theme_css .='}';
    }

    /*---------------- Single post Settings ------------------*/

    $online_tutor_single_post_navigation_show_hide = get_theme_mod('online_tutor_single_post_navigation_show_hide',true);
    if($online_tutor_single_post_navigation_show_hide != true){
        $online_tutor_theme_css .='.nav-links{';
            $online_tutor_theme_css .='display: none;';
        $online_tutor_theme_css .='}';
    }

    /*--------------------------- Woocommerce Product Border Radius -------------------*/

    $online_tutor_woo_product_border_radius = get_theme_mod('online_tutor_woo_product_border_radius', 0);
    if($online_tutor_woo_product_border_radius != false){
        $online_tutor_theme_css .='.woocommerce ul.products li.product a img{';
            $online_tutor_theme_css .='border-radius: '.esc_attr($online_tutor_woo_product_border_radius).'px;';
        $online_tutor_theme_css .='}';
    }

    /*--------------------------- Woocommerce Product Sale Positions -------------------*/

    $online_tutor_product_sale = get_theme_mod( 'online_tutor_woocommerce_product_sale','Right');
    if($online_tutor_product_sale == 'Right'){
        $online_tutor_theme_css .='.woocommerce ul.products li.product .onsale{';
            $online_tutor_theme_css .='left: auto; right: 15px;';
        $online_tutor_theme_css .='}';
    }else if($online_tutor_product_sale == 'Left'){
        $online_tutor_theme_css .='.woocommerce ul.products li.product .onsale{';
            $online_tutor_theme_css .='left: 15px; right: auto;';
        $online_tutor_theme_css .='}';
    }else if($online_tutor_product_sale == 'Center'){
        $online_tutor_theme_css .='.woocommerce ul.products li.product .onsale{';
            $online_tutor_theme_css .='right: 50%;left: 50%;';
        $online_tutor_theme_css .='}';
    }

    /*--------------------------- Woocommerce Related Products -------------------*/

    $online_tutor_woocommerce_related_product_show_hide = get_theme_mod('online_tutor_woocommerce_related_product_show_hide',true);
    if($online_tutor_woocommerce_related_product_show_hide != true){
        $online_tutor_theme_css .='.related.products{';
            $online_tutor_theme_css .='display: none;';
        $online_tutor_theme_css .='}';
    }

    /*--------------------------- Footer background image -------------------*/

    $online_tutor_footer_bg_image = get_theme_mod('online_tutor_footer_bg_image');
    if($online_tutor_footer_bg_image != false){
        $online_tutor_theme_css .='#colophon{';
            $online_tutor_theme_css .='background: url('.esc_attr($online_tutor_footer_bg_image).')!important;';
        $online_tutor_theme_css .='}';
    }

    /*--------------------------- Featured Image Border Radius -------------------*/

    $online_tutor_post_page_image_border_radius = get_theme_mod('online_tutor_post_page_image_border_radius', 0);
    if($online_tutor_post_page_image_border_radius != false){
        $online_tutor_theme_css .='.post-thumbnail img{';
            $online_tutor_theme_css .='border-radius: '.esc_attr($online_tutor_post_page_image_border_radius).'px;';
        $online_tutor_theme_css .='}';
    }

    /*--------------------------- Copyright Background Color -------------------*/

    $online_tutor_copyright_background_color = get_theme_mod('online_tutor_copyright_background_color');
    if($online_tutor_copyright_background_color != false){
        $online_tutor_theme_css .='.footer_info{';
            $online_tutor_theme_css .='background-color: '.esc_attr($online_tutor_copyright_background_color).' !important;';
        $online_tutor_theme_css .='}';
    } 

    /*--------------------------- Site Title And Tagline Color -------------------*/

    $online_tutor_logo_title_color = get_theme_mod('online_tutor_logo_title_color');
    if($online_tutor_logo_title_color != false){
        $online_tutor_theme_css .='p.site-title a, .navbar-brand a{';
            $online_tutor_theme_css .='color: '.esc_attr($online_tutor_logo_title_color).' !important;';
        $online_tutor_theme_css .='}';
    }

    $online_tutor_logo_tagline_color = get_theme_mod('online_tutor_logo_tagline_color');
    if($online_tutor_logo_tagline_color != false){
        $online_tutor_theme_css .='.logo p.site-description, .navbar-brand p{';
            $online_tutor_theme_css .='color: '.esc_attr($online_tutor_logo_tagline_color).'  !important;';
        $online_tutor_theme_css .='}';
    }