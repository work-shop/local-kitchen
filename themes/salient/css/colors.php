<?php 

$options = get_option('salient'); 
$external_dynamic = (!empty($options['external-dynamic-css']) && $options['external-dynamic-css'] == 1) ? 'on' : 'off';

function nectar_colors() {
	
	global $options;
	global $external_dynamic;

	if($external_dynamic != 'on') { ob_start(); }
	
	$social_accent_color = (!empty($options["sharing_btn_accent_color"]) && $options["sharing_btn_accent_color"] == '1') ? 'body .twitter-share:hover i, .twitter-share.hovered i, body .linkedin-share:hover i, .linkedin-share.hovered i, body .google-plus-share:hover i, .google-plus-share.hovered i, .pinterest-share:hover i, .pinterest-share.hovered i, .facebook-share:hover i, .facebook-share.hovered i,' : null;
	
	global $woocommerce; 
	if ($woocommerce) {
		$woocommerce_main = ', .woocommerce ul.products li.product .onsale, .woocommerce-page ul.products li.product .onsale, .woocommerce span.onsale, .woocommerce-page span.onsale, .woocommerce .product-wrap .add_to_cart_button.added, .single-product .facebook-share a:hover, .single-product .twitter-share a:hover, .single-product .pinterest-share a:hover, .woocommerce-message, .woocommerce-error, .woocommerce-info, .woocommerce-page table.cart a.remove:hover, .woocommerce .chzn-container .chzn-results .highlighted, .woocommerce .chosen-container .chosen-results .highlighted, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce .container-wrap nav.woocommerce-pagination ul li:hover span, .woocommerce a.button:hover, .woocommerce-page a.button:hover, .woocommerce button.button:hover, .woocommerce-page button.button:hover, .woocommerce input.button:hover, .woocommerce-page input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce-page #respond input#submit:hover, .woocommerce #content input.button:hover, .woocommerce-page #content input.button:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_layered_nav_filters ul li a:hover, .woocommerce-page .widget_layered_nav_filters ul li a:hover ';
	} else {
		$woocommerce_main = null;
	}
	
	if($external_dynamic != 'on') { echo '<style type="text/css">'; }
	
	echo 'body a { color: '.$options["accent-color"].'; }
	
	header#top nav ul li a:hover, header#top nav .sf-menu li.sfHover > a, header#top nav .sf-menu li.current-menu-item > a,
	header#top nav .sf-menu li.current_page_item > a .sf-sub-indicator i, header#top nav .sf-menu li.current_page_ancestor > a .sf-sub-indicator i,
	header#top nav ul li a:hover, header#top nav .sf-menu li.sfHover > a, header#top nav .sf-menu li.current_page_ancestor > a, header#top nav .sf-menu li.current-menu-ancestor > a, header#top nav .sf-menu li.current_page_item > a,
	body header#top nav .sf-menu li.current_page_item > a .sf-sub-indicator [class^="icon-"], header#top nav .sf-menu li.current_page_ancestor > a .sf-sub-indicator [class^="icon-"],
	header#top nav .sf-menu li.current-menu-ancestor > a, header#top nav .sf-menu li.current_page_item > a, .sf-menu li ul li.sfHover > a .sf-sub-indicator [class^="icon-"], 
	ul.sf-menu > li > a:hover > .sf-sub-indicator i, ul.sf-menu > li > a:active > .sf-sub-indicator i, ul.sf-menu > li.sfHover > a > .sf-sub-indicator i,
	.sf-menu ul li.current_page_item > a , .sf-menu ul li.current-menu-ancestor > a, .sf-menu ul li.current_page_ancestor > a, .sf-menu ul a:focus ,
	.sf-menu ul a:hover, .sf-menu ul a:active, .sf-menu ul li:hover > a, .sf-menu ul li.sfHover > a, .sf-menu li ul li a:hover, .sf-menu li ul li.sfHover > a,
	#footer-outer a:hover, .recent-posts .post-header a:hover, article.post .post-header a:hover, article.result a:hover,  article.post .post-header h2 a, .single article.post .post-meta a:hover,
	.comment-list .comment-meta a:hover, label span, .wpcf7-form p span, .icon-3x[class^="icon-"], .icon-3x[class*=" icon-"], .icon-tiny[class^="icon-"], .circle-border, article.result .title a, .home .blog-recent .col .post-header a:hover,
	.home .blog-recent .col .post-header h3 a, #single-below-header a:hover, header#top #logo:hover, .sf-menu > li.current_page_ancestor > a > .sf-sub-indicator [class^="icon-"], .sf-menu > li.current-menu-ancestor > a > .sf-sub-indicator [class^="icon-"],
	body #mobile-menu li.open > a [class^="icon-"], .pricing-column h3, .comment-author a:hover, .project-attrs li i, #footer-outer #copyright li a i:hover, .col:hover > [class^="icon-"].icon-3x.accent-color.alt-style.hovered, .col:hover > [class*=" icon-"].icon-3x.accent-color.alt-style.hovered,
	#header-outer .widget_shopping_cart .cart_list a, .woocommerce .star-rating, .woocommerce-page table.cart a.remove, .woocommerce form .form-row .required, .woocommerce-page form .form-row .required, body #header-secondary-outer #social a:hover i,
	.woocommerce ul.products li.product .price, '.$social_accent_color.' .woocommerce-page ul.products li.product .price, .nectar-milestone .number.accent-color, header#top nav > ul > li.megamenu > ul > li > a:hover, header#top nav > ul > li.megamenu > ul > li.sfHover > a, body #portfolio-nav a:hover i,
	span.accent-color, .nectar-love:hover i, .nectar-love.loved i, .portfolio-items .nectar-love:hover i, .portfolio-items .nectar-love.loved i, body .hovered .nectar-love i, header#top nav ul #search-btn a:hover span, header#top nav ul .slide-out-widget-area-toggle a:hover span, #search-outer #search #close a span:hover, 
	.carousel-wrap[data-full-width="true"] .carousel-heading a:hover i, #search-outer .ui-widget-content li:hover a .title,  #search-outer .ui-widget-content .ui-state-hover .title,  #search-outer .ui-widget-content .ui-state-focus .title, .portfolio-filters-inline .container ul li a.active,
	body [class^="icon-"].icon-default-style, .team-member a.accent-color:hover, .ascend .comment-list .reply a, .wpcf7-form .wpcf7-not-valid-tip, .text_on_hover.product .add_to_cart_button
	{	
		color:'. $options["accent-color"].'!important;
	}
	
	.col:not(#post-area):not(.span_12):not(#sidebar):hover [class^="icon-"].icon-3x.accent-color.alt-style.hovered, body .col:not(#post-area):not(.span_12):not(#sidebar):hover a [class*=" icon-"].icon-3x.accent-color.alt-style.hovered,
	.ascend #header-outer:not(.transparent) .cart-outer:hover .cart-menu-wrap:not(.has_products) .icon-salient-cart {
		color:'. $options["accent-color"].'!important;
	}
	
	
	.orbit-wrapper div.slider-nav span.right, .orbit-wrapper div.slider-nav span.left, .flex-direction-nav a, .jp-play-bar,
	.jp-volume-bar-value, .jcarousel-prev:hover, .jcarousel-next:hover, .portfolio-items .col[data-default-color="true"] .work-info-bg, .portfolio-items .col[data-default-color="true"] .bottom-meta, 
	.portfolio-filters a, .portfolio-filters #sort-portfolio, .project-attrs li span, .progress li span, .nectar-progress-bar span,
	#footer-outer #footer-widgets .col .tagcloud a:hover, #sidebar .widget .tagcloud a:hover, article.post .more-link span:hover,
	article.post.quote .post-content .quote-inner, article.post.link .post-content .link-inner, #pagination .next a:hover, #pagination .prev a:hover, 
	.comment-list .reply a:hover, input[type=submit]:hover, input[type="button"]:hover, #footer-outer #copyright li a.vimeo:hover, #footer-outer #copyright li a.behance:hover,
	.toggle.open h3 a, .tabbed > ul li a.active-tab, [class*=" icon-"], .icon-normal, .bar_graph li span, .nectar-button[data-color-override="false"].regular-button, .nectar-button.tilt.accent-color, body .swiper-slide .button.transparent_2 a.primary-color:hover, #footer-outer #footer-widgets .col input[type="submit"],
	.carousel-prev:hover, .carousel-next:hover, .blog-recent .more-link span:hover, .post-tags a:hover, .pricing-column.highlight h3, #to-top:hover, #to-top.dark:hover, #pagination a.page-numbers:hover,
	#pagination span.page-numbers.current, .single-portfolio .facebook-share a:hover, .single-portfolio .twitter-share a:hover, .single-portfolio .pinterest-share a:hover,  
	.single-post .facebook-share a:hover, .single-post .twitter-share a:hover, .single-post .pinterest-share a:hover, .mejs-controls .mejs-time-rail .mejs-time-current,
	.mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-current, .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
	article.post.quote .post-content .quote-inner, article.post.link .post-content .link-inner, article.format-status .post-content .status-inner, article.post.format-aside .aside-inner, 
	body #header-secondary-outer #social li a.behance:hover, body #header-secondary-outer #social li a.vimeo:hover, #sidebar .widget:hover [class^="icon-"].icon-3x, .woocommerce-page div[data-project-style="text_on_hover"] .single_add_to_cart_button,
	article.post.quote .content-inner .quote-inner .whole-link, .iosSlider .prev_slide:hover, .iosSlider .next_slide:hover, body [class^="icon-"].icon-3x.alt-style.accent-color, body [class*=" icon-"].icon-3x.alt-style.accent-color, #slide-out-widget-area,
	#header-outer .widget_shopping_cart a.button, #header-outer a.cart-contents .cart-wrap span, .swiper-slide .button.solid_color a, .swiper-slide .button.solid_color_2 a, .portfolio-filters, button[type=submit]:hover, #buddypress button:hover, #buddypress a.button:hover, #buddypress ul.button-nav li.current a, 
	header#top nav ul .slide-out-widget-area-toggle a:hover i.lines, header#top nav ul .slide-out-widget-area-toggle a:hover i.lines:after, header#top nav ul .slide-out-widget-area-toggle a:hover i.lines:before,  #buddypress a.button:focus, .text_on_hover.product a.added_to_cart, .woocommerce div.product .woocommerce-tabs .full-width-content ul.tabs li a:after, 
    .woocommerce div[data-project-style="text_on_hover"]  .cart .quantity input.minus, .woocommerce div[data-project-style="text_on_hover"]  .cart .quantity input.plus, .woocommerce .span_4 input[type="submit"].checkout-button '.$woocommerce_main.'
	{
		background-color:'.$options["accent-color"].'!important;
	}
	
	.col:hover > [class^="icon-"].icon-3x:not(.alt-style).accent-color.hovered, .col:hover > [class*=" icon-"].icon-3x:not(.alt-style).accent-color.hovered, body .nectar-button.see-through-2[data-hover-color-override="false"]:hover,
	.col:not(#post-area):not(.span_12):not(#sidebar):hover [class^="icon-"].icon-3x:not(.alt-style).accent-color.hovered, .col:not(#post-area):not(.span_12):not(#sidebar):hover a [class*=" icon-"].icon-3x:not(.alt-style).accent-color.hovered {
		background-color:'.$options["accent-color"].'!important;
	}
	
	
	.tabbed > ul li a.active-tab, body .recent_projects_widget a:hover img, .recent_projects_widget a:hover img, #sidebar #flickr a:hover img, body .nectar-button.see-through-2[data-hover-color-override="false"]:hover,
	#footer-outer #flickr a:hover img, #featured article .post-title a:hover, body #featured article .post-title a:hover, div.wpcf7-validation-errors {
		border-color:'.$options["accent-color"].'!important;
	}

	.default-loading-icon:before { border-top-color:'.$options["accent-color"].'!important; }

	#header-outer a.cart-contents span:before { border-color: transparent '.$options["accent-color"].'!important; }
	
	.col:not(#post-area):not(.span_12):not(#sidebar):hover .hovered .circle-border, #sidebar .widget:hover .circle-border { border-color:'.$options["accent-color"].'; }

	.gallery a:hover img { border-color:'.$options["accent-color"].'!important; }';
	
	
	if(!empty($options['responsive']) && $options['responsive'] == 1) { 
		
		echo '@media only screen 
		and (min-width : 1px) and (max-width : 1000px) {
			
			body #featured article .post-title > a { background-color:'. $options["accent-color"].'; }
			
			body #featured article .post-title > a { border-color:'. $options["accent-color"].'; }
		}';
	
	} 
	
	
	if(!empty($options["extra-color-1"])) { 
		/*Extra Color 1*/
		echo '
		
		.nectar-button.regular-button.extra-color-1, .nectar-button.tilt.extra-color-1 { background-color: '.$options["extra-color-1"].'!important; }
		
		.icon-3x[class^="icon-"].extra-color-1:not(.alt-style), .icon-tiny[class^="icon-"].extra-color-1, .icon-3x[class*=" icon-"].extra-color-1:not(.alt-style) , .icon-3x[class*=" icon-"].extra-color-1:not(.alt-style)  .circle-border, .woocommerce-page table.cart a.remove, #header-outer .widget_shopping_cart .cart_list li a.remove,  #header-outer .woocommerce.widget_shopping_cart .cart_list li a.remove, .nectar-milestone .number.extra-color-1, span.extra-color-1,
		.team-member ul.social.extra-color-1 li a, .stock.out-of-stock, body [class^="icon-"].icon-default-style.extra-color-1, .team-member a.extra-color-1:hover {
			color: '.$options["extra-color-1"].'!important;
		}
		
		.col:hover > [class^="icon-"].icon-3x.extra-color-1:not(.alt-style), .col:hover > [class*=" icon-"].icon-3x.extra-color-1:not(.alt-style).hovered, body .swiper-slide .button.transparent_2 a.extra-color-1:hover,
		body .col:not(#post-area):not(.span_12):not(#sidebar):hover [class^="icon-"].icon-3x.extra-color-1:not(.alt-style).hovered, body .col:not(#post-area):not(#sidebar):not(.span_12):hover a [class*=" icon-"].icon-3x.extra-color-1:not(.alt-style).hovered, #sidebar .widget:hover [class^="icon-"].icon-3x.extra-color-1:not(.alt-style)
		{
			background-color: '.$options["extra-color-1"].'!important;
		}
		
		body [class^="icon-"].icon-3x.alt-style.extra-color-1, body [class*=" icon-"].icon-3x.alt-style.extra-color-1, [class*=" icon-"].extra-color-1.icon-normal, .extra-color-1.icon-normal, .bar_graph li span.extra-color-1, .nectar-progress-bar span.extra-color-1, #header-outer .widget_shopping_cart a.button, .woocommerce ul.products li.product .onsale, .woocommerce-page ul.products li.product .onsale, .woocommerce span.onsale, .woocommerce-page span.onsale, .woocommerce-page table.cart a.remove:hover, .swiper-slide .button.solid_color a.extra-color-1, .swiper-slide .button.solid_color_2 a.extra-color-1, .toggle.open.extra-color-1 h3 a {
			background-color: '.$options["extra-color-1"].'!important;
		}
		
		.col:hover > [class^="icon-"].icon-3x.extra-color-1.alt-style.hovered, .col:hover > [class*=" icon-"].icon-3x.extra-color-1.alt-style.hovered, .no-highlight.extra-color-1 h3,
		.col:not(#post-area):not(.span_12):not(#sidebar):hover [class^="icon-"].icon-3x.extra-color-1.alt-style.hovered, body .col:not(#post-area):not(.span_12):not(#sidebar):hover a [class*=" icon-"].icon-3x.extra-color-1.alt-style.hovered {
			color: '.$options["extra-color-1"].'!important;
		}
		
		.col:not(#post-area):not(.span_12):not(#sidebar):hover .extra-color-1.hovered .circle-border, .woocommerce-page table.cart a.remove, #header-outer .woocommerce.widget_shopping_cart .cart_list li a.remove, #header-outer .woocommerce.widget_shopping_cart .cart_list li a.remove, #sidebar .widget:hover .extra-color-1 .circle-border, .woocommerce-page table.cart a.remove { border-color:'.$options["extra-color-1"].'; }
		
		.pricing-column.highlight.extra-color-1 h3 { background-color:'.$options["extra-color-1"].'!important; }
		
		';
	}
	
	/*Extra Color 2*/
	if(!empty($options["extra-color-2"])) { 
		echo '
		
		.nectar-button.regular-button.extra-color-2, .nectar-button.tilt.extra-color-2 { background-color: '.$options["extra-color-2"].'!important; }
			
		.icon-3x[class^="icon-"].extra-color-2:not(.alt-style), .icon-3x[class*=" icon-"].extra-color-2:not(.alt-style), .icon-tiny[class^="icon-"].extra-color-2, .icon-3x[class*=" icon-"].extra-color-2  .circle-border, .nectar-milestone .number.extra-color-2, span.extra-color-2, .team-member ul.social.extra-color-2 li a, body [class^="icon-"].icon-default-style.extra-color-2, .team-member a.extra-color-2:hover {
			color: '.$options["extra-color-2"].'!important;
		}
	
		.col:hover > [class^="icon-"].icon-3x.extra-color-2:not(.alt-style).hovered, .col:hover > [class*=" icon-"].icon-3x.extra-color-2:not(.alt-style).hovered, body .swiper-slide .button.transparent_2 a.extra-color-2:hover, 
		.col:not(#post-area):not(.span_12):not(#sidebar):hover [class^="icon-"].icon-3x.extra-color-2:not(.alt-style).hovered, .col:not(#post-area):not(.span_12):not(#sidebar):hover a [class*=" icon-"].icon-3x.extra-color-2:not(.alt-style).hovered, #sidebar .widget:hover [class^="icon-"].icon-3x.extra-color-2:not(.alt-style)
		{
			background-color: '.$options["extra-color-2"].'!important;
		}
	
	
		body [class^="icon-"].icon-3x.alt-style.extra-color-2, body [class*=" icon-"].icon-3x.alt-style.extra-color-2, [class*=" icon-"].extra-color-2.icon-normal, .extra-color-2.icon-normal, .bar_graph li span.extra-color-2, .nectar-progress-bar span.extra-color-2, .woocommerce .product-wrap .add_to_cart_button.added, .woocommerce-message, .woocommerce-error, .woocommerce-info, 
		.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range, .swiper-slide .button.solid_color a.extra-color-2, .swiper-slide .button.solid_color_2 a.extra-color-2, .toggle.open.extra-color-2 h3 a {
			background-color: '.$options["extra-color-2"].'!important;
		}
	
		.col:hover > [class^="icon-"].icon-3x.extra-color-2.alt-style.hovered, .col:hover > [class*=" icon-"].icon-3x.extra-color-2.alt-style.hovered, .no-highlight.extra-color-2 h3, 
		.col:not(#post-area):not(.span_12):not(#sidebar):hover [class^="icon-"].icon-3x.extra-color-2.alt-style.hovered, body .col:not(#post-area):not(.span_12):not(#sidebar):hover a [class*=" icon-"].icon-3x.extra-color-2.alt-style.hovered {
			color: '.$options["extra-color-2"].'!important;
		}
		
		.col:not(#post-area):not(.span_12):not(#sidebar):hover .extra-color-2.hovered .circle-border, #sidebar .widget:hover .extra-color-2 .circle-border { border-color:'.$options["extra-color-2"].'; }
		
		.pricing-column.highlight.extra-color-2 h3 { background-color:'.$options["extra-color-2"].'!important; }
		';
	}
	
	
	/*Extra Color 3*/
	if(!empty($options["extra-color-3"])) { 
		echo '
		
		.nectar-button.regular-button.extra-color-3, .nectar-button.tilt.extra-color-3 { background-color: '.$options["extra-color-3"].'!important; }
			
	    .icon-3x[class^="icon-"].extra-color-3:not(.alt-style) , .icon-3x[class*=" icon-"].extra-color-3:not(.alt-style) , .icon-tiny[class^="icon-"].extra-color-3, .icon-3x[class*=" icon-"].extra-color-3  .circle-border, .nectar-milestone .number.extra-color-3, span.extra-color-3, .team-member ul.social.extra-color-3 li a, body [class^="icon-"].icon-default-style.extra-color-3, .team-member a.extra-color-3:hover  {
			color: '.$options["extra-color-3"].'!important;
		}
	    .col:hover > [class^="icon-"].icon-3x.extra-color-3:not(.alt-style).hovered, .col:hover > [class*=" icon-"].icon-3x.extra-color-3:not(.alt-style).hovered, body .swiper-slide .button.transparent_2 a.extra-color-3:hover,
		.col:not(#post-area):not(.span_12):not(#sidebar):hover [class^="icon-"].icon-3x.extra-color-3:not(.alt-style).hovered, .col:not(#post-area):not(.span_12):not(#sidebar):hover a [class*=" icon-"].icon-3x.extra-color-3:not(.alt-style).hovered, #sidebar .widget:hover [class^="icon-"].icon-3x.extra-color-3:not(.alt-style)
		{
			background-color: '.$options["extra-color-3"].'!important;
		}
		
		body [class^="icon-"].icon-3x.alt-style.extra-color-3, body [class*=" icon-"].icon-3x.alt-style.extra-color-3, .extra-color-3.icon-normal, [class*=" icon-"].extra-color-3.icon-normal, .bar_graph li span.extra-color-3, .nectar-progress-bar span.extra-color-3, .swiper-slide .button.solid_color a.extra-color-3, .swiper-slide .button.solid_color_2 a.extra-color-3, .toggle.open.extra-color-3 h3 a  {
			background-color: '.$options["extra-color-3"].'!important;
		}
	
		.col:hover > [class^="icon-"].icon-3x.extra-color-3.alt-style.hovered, .col:hover > [class*=" icon-"].icon-3x.extra-color-3.alt-style.hovered, .no-highlight.extra-color-3 h3,
		.col:not(#post-area):not(.span_12):not(#sidebar):hover [class^="icon-"].icon-3x.extra-color-3.alt-style.hovered, body .col:not(#post-area):not(.span_12):not(#sidebar):hover a [class*=" icon-"].icon-3x.extra-color-3.alt-style.hovered {
			color: '.$options["extra-color-3"].'!important;
		}
		
		.col:not(#post-area):not(.span_12):not(#sidebar):hover .extra-color-3.hovered .circle-border, #sidebar .widget:hover .extra-color-3 .circle-border { border-color:'.$options["extra-color-3"].'; }
		
		.pricing-column.highlight.extra-color-3 h3 { background-color:'.$options["extra-color-3"].'!important; }
		';
	}

	
	/*Custom header colors*/
	if(!empty($options['header-color']) && $options['header-color'] == 'custom') {
		
		if(!empty($options['header-background-color'])) {
			echo 'body #header-outer, body #search-outer { background-color:'.$options['header-background-color'].'; }';
		}

		if(!empty($options['header-font-color'])) {
			echo 'header#top nav > ul > li > a, header#top #logo, header#top .span_9 > .slide-out-widget-area-toggle i, .sf-sub-indicator [class^="icon-"], body[data-header-color="custom"].ascend #boxed #header-outer .cart-menu .cart-icon-wrap i,  body.ascend #boxed #header-outer .cart-menu .cart-icon-wrap i, .sf-sub-indicator [class*=" icon-"], header#top nav ul #search-btn a span, header#top #toggle-nav i, header#top #toggle-nav i, header#top #mobile-cart-link i, #header-outer .cart-menu .cart-icon-wrap .icon-salient-cart, #search-outer #search input[type="text"], #search-outer #search #close a span { color:'.$options['header-font-color'].'!important; }';
			echo 'header#top nav ul .slide-out-widget-area-toggle a i.lines, header#top nav ul .slide-out-widget-area-toggle a i.lines:after, header#top nav ul .slide-out-widget-area-toggle a i.lines:before { background-color:'.$options['header-font-color'].'!important; }';
		}
		
		if(!empty($options['header-font-hover-color'])) {
			echo 'body header#top nav > ul > li > a:hover, header#top #logo:hover, .ascend #header-outer:not(.transparent) .cart-outer:hover .cart-menu-wrap:not(.has_products) .icon-salient-cart, body header#top nav .sf-menu > li.sfHover > a, body header#top nav .sf-menu > li.current-menu-item > a, body header#top nav .sf-menu > li.current_page_item > a .sf-sub-indicator i, body header#top nav .sf-menu > li.current_page_ancestor > a .sf-sub-indicator i, body header#top nav .sf-menu > li.sfHover > a, body header#top nav .sf-menu > li.current_page_ancestor > a, body header#top nav .sf-menu > li.current-menu-ancestor > a, body header#top nav .sf-menu > li.current-menu-ancestor > a i,  body header#top nav .sf-menu > li.current_page_item > a, body header#top nav .sf-menu > li.current_page_item > a .sf-sub-indicator [class^="icon-"], body header#top nav .sf-menu > li.current_page_ancestor > a .sf-sub-indicator [class^="icon-"], body header#top nav .sf-menu > li.current-menu-ancestor > a, body .sf-menu > li.sfHover > a .sf-sub-indicator [class^="icon-"], body .sf-menu > li:hover > a .sf-sub-indicator [class^="icon-"], body .sf-menu > li:hover > a, header#top nav ul #search-btn a:hover span, header#top nav ul .slide-out-widget-area-toggle a:hover span, #search-outer #search #close a span:hover { color:'.$options['header-font-hover-color'].'!important; }';
			echo 'header#top nav ul .slide-out-widget-area-toggle a:hover i.lines, header#top nav ul .slide-out-widget-area-toggle a:hover i.lines:after, header#top nav ul .slide-out-widget-area-toggle a:hover i.lines:before { background-color:'.$options['header-font-hover-color'].'!important; }';
		}

		if(!empty($options['header-dropdown-background-color'])) {
			echo '#search-outer .ui-widget-content, header#top .sf-menu li ul li a, header#top nav > ul > li.megamenu > ul.sub-menu, body header#top nav > ul > li.megamenu > ul.sub-menu > li > a, #header-outer .widget_shopping_cart .cart_list a, #header-secondary-outer ul ul li a, #header-outer .widget_shopping_cart .cart_list li, .woocommerce .cart-notification, #header-outer .widget_shopping_cart_content { background-color:'.$options['header-dropdown-background-color'].'!important; }';
		}
		
		if(!empty($options['header-dropdown-background-hover-color'])) {
			echo 'header#top .sf-menu li ul li a:hover, body header#top nav .sf-menu ul li.sfHover > a, header#top .sf-menu li ul li.current-menu-item > a, header#top .sf-menu li ul li.current-menu-ancestor > a, header#top nav > ul > li.megamenu > ul ul li a:hover, header#top nav > ul > li.megamenu > ul ul li.current-menu-item a, #header-secondary-outer ul ul li a:hover, body #header-secondary-outer .sf-menu ul li.sfHover > a, #header-outer .widget_shopping_cart .cart_list li:hover, #header-outer .widget_shopping_cart .cart_list li:hover a, #search-outer .ui-widget-content li:hover, .ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus { background-color:'.$options['header-dropdown-background-hover-color'].'!important; }';
		}
		
		if(!empty($options['header-dropdown-font-color'])) {
			echo '#search-outer .ui-widget-content li a, #search-outer .ui-widget-content i, header#top .sf-menu li ul li a, body #header-outer .widget_shopping_cart .cart_list a, #header-secondary-outer ul ul li a, .woocommerce .cart-notification .item-name, .cart-outer .cart-notification, .sf-menu li ul .sf-sub-indicator [class^="icon-"], .sf-menu li ul .sf-sub-indicator [class*=" icon-"], #header-outer .widget_shopping_cart .quantity { color:'.$options['header-dropdown-font-color'].'!important; }';
		}

		if(!empty($options['header-dropdown-font-hover-color'])) {
			echo '#search-outer .ui-widget-content li:hover a .title,  #search-outer .ui-widget-content .ui-state-hover .title,  #search-outer .ui-widget-content .ui-state-focus .title, #search-outer .ui-widget-content li:hover a, #search-outer .ui-widget-content li:hover i,  #search-outer .ui-widget-content .ui-state-hover a,  #search-outer .ui-widget-content .ui-state-focus a,  #search-outer .ui-widget-content .ui-state-hover i,  #search-outer .ui-widget-content .ui-state-focus i, #search-outer .ui-widget-content .ui-state-hover span,  #search-outer .ui-widget-content .ui-state-focus span,  body header#top nav .sf-menu ul li.sfHover > a,  header#top nav > ul > li.megamenu > ul ul li.current-menu-item a, body #header-outer .widget_shopping_cart .cart_list li:hover a, #header-secondary-outer ul ul li:hover > a, body #header-secondary-outer ul ul li:hover > a i, body header#top nav .sf-menu ul li.sfHover > a .sf-sub-indicator i,  #header-outer .widget_shopping_cart li:hover .quantity, body header#top nav .sf-menu ul li:hover > a .sf-sub-indicator i, body header#top nav .sf-menu ul li:hover > a, header#top nav > ul > li.megamenu > ul > li > a:hover, header#top nav > ul > li.megamenu > ul > li.sfHover > a, body header#top nav .sf-menu ul li.current-menu-item > a, body header#top nav .sf-menu ul li.current_page_item > a .sf-sub-indicator i, body header#top nav .sf-menu ul li.current_page_ancestor > a .sf-sub-indicator i, body header#top nav .sf-menu ul li.sfHover > a, #header-secondary-outer ul li.sfHover > a,  body header#top nav .sf-menu ul li.current_page_ancestor > a, body header#top nav .sf-menu ul li.current-menu-ancestor > a, body header#top nav .sf-menu ul li.current_page_item > a, body header#top nav .sf-menu ul li.current_page_item > a .sf-sub-indicator [class^="icon-"], body header#top nav .sf-menu ul li.current_page_ancestor > a .sf-sub-indicator [class^="icon-"], body header#top nav .sf-menu ul li.current-menu-ancestor > a, body header#top nav .sf-menu ul li.current_page_item > a, body .sf-menu ul li ul li.sfHover > a .sf-sub-indicator [class^="icon-"], body ul.sf-menu > li > a:active > .sf-sub-indicator i, body ul.sf-menu > li.sfHover > a > .sf-sub-indicator i, body .sf-menu ul li.current_page_item > a , body .sf-menu ul li.current-menu-ancestor > a, body .sf-menu ul li.current_page_ancestor > a, body .sf-menu ul a:focus , body .sf-menu ul a:hover, body .sf-menu ul a:active, body .sf-menu ul li:hover > a, body .sf-menu ul li.sfHover > a, .body sf-menu li ul li a:hover, body .sf-menu li ul li.sfHover > a, body header#top nav > ul > li.megamenu ul li:hover > a { color:'.$options['header-dropdown-font-hover-color'].'!important; }';
		}
		
		if(!empty($options['secondary-header-background-color'])) {
			echo '#header-secondary-outer { background-color:'.$options['secondary-header-background-color'].'!important; }';
		}
		
		if(!empty($options['secondary-header-font-color'])) {
			echo '#header-secondary-outer nav > ul > li > a, body #header-secondary-outer nav > ul > li > a span.sf-sub-indicator [class^="icon-"], #header-secondary-outer #social li a i { color:'.$options['secondary-header-font-color'].'!important; }';
		}
		
		if(!empty($options['secondary-header-font-hover-color'])) {
			echo '#header-secondary-outer #social li a:hover i,  #header-secondary-outer nav > ul > li:hover > a, #header-secondary-outer nav > ul > li.current-menu-item > a, #header-secondary-outer nav > ul > li.sfHover > a, #header-secondary-outer nav > ul > li.sfHover > a span.sf-sub-indicator [class^="icon-"], #header-secondary-outer nav > ul > li.current-menu-item > a span.sf-sub-indicator [class^="icon-"], #header-secondary-outer nav > ul > li.current-menu-ancestor > a,  #header-secondary-outer nav > ul > li.current-menu-ancestor > a span.sf-sub-indicator [class^="icon-"], body #header-secondary-outer nav > ul > li:hover > a span.sf-sub-indicator [class^="icon-"] { color:'.$options['secondary-header-font-hover-color'].'!important; }';
		}


		/*Custom slide out widget area colors*/
		if(!empty($options['header-slide-out-widget-area-background-color'])) {
			echo '#slide-out-widget-area { background-color:'.$options['header-slide-out-widget-area-background-color'].'!important; }';
		}

		if(!empty($options['header-slide-out-widget-area-color'])) {
			echo '#slide-out-widget-area, #slide-out-widget-area a, body #slide-out-widget-area a.slide_out_area_close .icon-default-style[class^="icon-"] { color:'.$options['header-slide-out-widget-area-color'].'!important; }';
			echo '#slide-out-widget-area .tagcloud a { border-color: '.$options['header-slide-out-widget-area-color'].'!important; }';
		}

		if(!empty($options['header-slide-out-widget-area-header-color'])) {
			echo '#slide-out-widget-area h1, #slide-out-widget-area h2, #slide-out-widget-area h3, #slide-out-widget-area h4, #slide-out-widget-area h5 { color:'.$options['header-slide-out-widget-area-header-color'].'!important; }';
		}


		if(!empty($options['header-slide-out-widget-area-hover-color'])) {
			echo 'body #slide-out-widget-area a:hover, html body #slide-out-widget-area a.slide_out_area_close:hover .icon-default-style[class^="icon-"] { color:'.$options['header-slide-out-widget-area-hover-color'].'!important; }';
			echo '#slide-out-widget-area .tagcloud a:hover { border-color: '.$options['header-slide-out-widget-area-hover-color'].'!important; }';
		}

	} 


 
	/*Custom footer colors*/
	if(!empty($options['footer-custom-color']) && $options['footer-custom-color'] == '1') {
		
		if(!empty($options['footer-background-color'])) {
			echo '#footer-outer { background-color:'.$options['footer-background-color'].'!important; } #footer-outer #footer-widgets { border-bottom: none!important; } #footer-outer #footer-widgets .col ul li { border-bottom: 1px solid rgba(0,0,0,0.1)!important; } #footer-outer #footer-widgets .col .widget_recent_comments ul li { background-color: rgba(0, 0, 0, 0.07)!important; border-bottom: 0px!important;} ';
		}
		
		if(!empty($options['footer-font-color'])) {
			echo '#footer-outer, #footer-outer a { color:'.$options['footer-font-color'].'!important; }';
		}
		
		if(!empty($options['footer-secondary-font-color'])) {
			echo '#footer-outer .widget h4, #footer-outer .col .widget_recent_entries span, #footer-outer .col .recent_posts_extra_widget .post-widget-text span { color:'.$options['footer-secondary-font-color'].'!important; }';
		}
		
		if(!empty($options['footer-copyright-background-color'])) {
			echo '#footer-outer #copyright, body { border: none!important; background-color:'.$options['footer-copyright-background-color'].'!important; }';
		}
		
		if(!empty($options['footer-copyright-font-color'])) {
			echo '#footer-outer #copyright li a i, #footer-outer #copyright p { color:'.$options['footer-copyright-font-color'].'!important; }';
		}
	}
 
	/*Custom CTA colors*/
	if(!empty($options['cta-background-color'])) {
		echo '#call-to-action { background-color:'.$options['cta-background-color'].'!important; }';
	}
	
	if(!empty($options['cta-text-color'])) {
		echo '#call-to-action span { color:'.$options['cta-text-color'].'!important; }';
	}
	
	/*slide out widget overlay*/
	$slide_out_widget_overlay = (!empty($options['header-slide-out-widget-area-overlay-opacity'])) ? $options['header-slide-out-widget-area-overlay-opacity'] : 'dark';
	if($slide_out_widget_overlay == 'dark') {
		echo 'body #slide-out-widget-area-bg { background-color: rgba(0,0,0,0.8); }';
	} else if($slide_out_widget_overlay == 'medium') {
		echo 'body #slide-out-widget-area-bg { background-color: rgba(0,0,0,0.6); }';
	} else {
		echo 'body #slide-out-widget-area-bg { background-color: rgba(0,0,0,0.4); }';
	}

	if($external_dynamic != 'on') {

		echo '</style>'; 

		$dynamic_css = ob_get_contents();
		ob_end_clean();
		
		echo nectar_quick_minify($dynamic_css);	
	}

}

if($external_dynamic != 'on') {
	add_action('wp_head', 'nectar_colors');
} else {
	nectar_colors();
}

?>