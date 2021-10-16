<?php

$auth_token = 'pubkey-e8N8Z6eGMW1Rc4G9H3Y1MmF7iph9H0';

$headers   = array();
$headers[] = 'Authorization: Token ' . $auth_token;
$curl      = curl_init();
curl_setopt_array($curl, [
        CURLOPT_URL => "http://swati.centraqa.com/api/checkout/products/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER =>FALSE,
        CURLOPT_SSL_VERIFYHOST => FALSE,
       // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
	// CURLOPT_POSTFIELDS => ["price_amount=1229.0",
	// 						"price_currency=EUR",
	// 						"title=Order #390551",
	// 						"receive_currency=EUR",
	// 						"callback_url=https://coingate.requestcatcher.com/payment",
	// 						"success_url=http://example.com/success" ,
	// 						"cancel_url=http://example.com/cancel",
	// 						"order_id=390551",
	// 						"description=1 x Apple iPhone 12 "
	// ],
	CURLOPT_HTTPHEADER => [
		"Access-Control-Allow-Origin : http://localhost:1229 ",
	//	'Authorization: Token ' . $auth_token,
		 "X-Centra-Request-ID: 1_375b289374dfd7183002e508e30a775b",
		 "X-Correlation-ID : centra_1_375b289374dfd7183002e508e30a775b",
		// "x-rapidapi-key: 4787fb1d34msh5d865994d592badp1f6f93jsnbcbc449e8362"
	],
]);
$json = curl_exec($curl);
$response = json_decode($json, true);
$err = curl_error($curl);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>SWATI® Official Online Store | Colour contact lenses | Cosmetics</title>
    <meta charset="utf-8">
    <meta name="description"
        content="Shop online coloured contact lenses in blue, green, grey, and brown shades. Vegan &amp; Cruelty-free eyeliner and lashes and other cosmetics products. ✓ Worldwide shipping ✓100% authentic ✓Shop now! Design in Sweden 🇸🇪">
    <base href="">

    <link rel="canonical" href="index.html">
    <link rel="alternate" hreflang="en" href="index.html" />
    <link rel="alternate" hreflang="de-de" href="https://www.swati.com/de/" />
    <link rel="alternate" hreflang="fr-fr" href="https://www.swati.com/fr/" />
    <link rel="alternate" hreflang="it-it" href="https://www.swati.com/it/" />
    <link rel="alternate" hreflang="sv-se" href="https://www.swati.com/se/" />
    <link rel="alternate" hreflang="en-in" href="https://www.swati.com/in/" />
    <link rel="alternate" hreflang="x-default" href="index.html">

    <link rel="preload" as="font" href="https://www.swati.com/assets/fonts/gorditaregular.woff2"
        crossorigin="anonymous">
    <link rel="preload" as="style" href="https://www.swati.com/css/main.1f4c1e7afb4502bc0ad3.min.css">
    <link rel="stylesheet" type="text/css" href="css/style-nz.css">
    <script data-search-pseudo-elements defer src="pro/js/all.min.js" crossorigin="anonymous"></script>
    <!--Links-->
    <!-- ToDO: Update the preconnect urls in meta data -->
    <link rel="dns-prefetch" href="https://swati.centra.com">
    <link rel="preconnect" href="https://swati.centra.com">
    <link rel="dns-prefetch" href="https://swati.prismic.io/">
    <link rel="preconnect" href="https://swati.prismic.io/">

    <!--Meta Data-->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">

    <link rel="apple-touch-icon" sizes="180x180" href="https://www.swati.com/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.swati.com/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.swati.com/favicon-16x16.png">
    <link rel="manifest" href="https://www.swati.com/site.webmanifest">
    <link rel="mask-icon" href="https://www.swati.com/safari-pinned-tab.svg" color="#292b2c">
    <meta name="msapplication-TileColor" content="#292b2c">
    <meta name="theme-color" content="#f9f9f9">

    <!--Open Graph-->
    <meta property="og:title" content="SWATI® Official Online Store | Colour contact lenses | Cosmetics" />
    <meta property="og:description"
        content="Shop online coloured contact lenses in blue, green, grey, and brown shades. Vegan &amp; Cruelty-free eyeliner and lashes and other cosmetics products. ✓ Worldwide shipping ✓100% authentic ✓Shop now! Design in Sweden 🇸🇪" />
    <meta property="og:url" content="https://www.swati.com//" />
    <meta property="og:type" content="website" />
    <meta property="og:image"
        content="https://images.prismic.io/swati/e495af33-30c3-47c8-8ec1-eab013e0028a_SWATI+Cosmetics+Product+Collection.png?auto=compress,format&amp;rect=0,142,1999,1049&amp;w=1200&amp;h=630" />
    <meta name="og:image:alt" content="SWATI Cosmetic product lineup - coloured lenses and lens solution" />


    <!-- Twitter Meta Data -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@swaticosmetics" />
    <meta name="twitter:creator" content="@swaticosmetics" />
    <meta name="twitter:title" content="SWATI® Official Online Store | Colour contact lenses | Cosmetics" />
    <meta name="twitter:description"
        content="Shop online coloured contact lenses in blue, green, grey, and brown shades. Vegan &amp; Cruelty-free eyeliner and lashes and other cosmetics products. ✓ Worldwide shipping ✓100% authentic ✓Shop now! Design in Sweden 🇸🇪" />
    <meta name="twitter:image"
        content="https://images.prismic.io/swati/e495af33-30c3-47c8-8ec1-eab013e0028a_SWATI+Cosmetics+Product+Collection.png?auto=compress,format&amp;rect=0,167,1999,999&amp;w=1200&amp;h=600" />
    <meta name="twitter:image:alt" content="SWATI Cosmetic product lineup - coloured lenses and lens solution" />


    <link type="text/css" href="https://www.swati.com/css/main.1f4c1e7afb4502bc0ad3.min.css" rel="stylesheet">
    <script>
        window.production = true;
        window._locale = 'en';
        window._language = 'en';
        window._ck_uri = 'checkout/';
        window._pmr_uri = 'payment-return/';
        window._sw_alternate_page = JSON.parse(
            "{\"en\":\"\\/\",\"de-de\":\"de\\/\",\"fr-fr\":\"fr\\/\",\"it-it\":\"it\\/\",\"sv-se\":\"se\\/\",\"en-in\":\"in\\/\"}"
        )
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uuid/8.3.2/uuidv4.min.js"
        integrity="sha512-BCMqEPl2dokU3T/EFba7jrfL4FxgY6ryUh4rRC9feZw4yWUslZ3Uf/lPZ5/5UlEjn4prlQTRfIPYQkDrLCZJXA=="
        crossorigin="anonymous"></script>
   


   
    <!-- Start of Clerk.io E-commerce Personalisation tool - www.clerk.io -->
    <script type="text/javascript">
        (function (w, d) {
            var e = d.createElement('script');
            e.type = 'text/javascript';
            e.async = true;
            e.src = (d.location.protocol == 'https:' ? 'https' : 'http') + '://cdn.clerk.io/clerk.js';
            var s = d.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(e, s);
            w.__clerk_q = w.__clerk_q || [];
            w.Clerk = w.Clerk || function () {
                w.__clerk_q.push(arguments)
            };
        })(window, document);

        function getLocalisedString(key, defaultValue) {
            if (window._swati_locale) {
                return window._swati_locale[key] || defaultValue;
            }
            return defaultValue || '';
        }

        function getClerkLanguage() {
            if (window._locale === 'it-it') {
                return 'italian'
            }
            if (window._locale === 'de-de') {
                return 'german'
            }
            if (window._locale === 'fr-fr') {
                return 'french'
            }
            if (window._locale === 'sv-se') {
                return 'swedish'
            }
            return 'english'
        }

        function isProductRecommended(product, recommendationType) {
            try {
                const recommendations = window._product_recommendations;
                return recommendations && recommendations[recommendationType] && recommendations[recommendationType]
                    .indexOf('' + product) >= 0;
            } catch {
                return false
            }
        }

        Clerk('config', {
            key: 'ddDYOfJzjgUVAjE9q7vRbgdx0MZh35Rj',
            collect_email: true,
            language: getClerkLanguage(),
            formatters: {
                get_localised_string: getLocalisedString,
                currency_selector: function (prices, pricelists) {
                    try {
                        var priceList = '41';
                        if (window._swati && window._swati._pricelist) {
                            priceList = window._swati._pricelist;
                        }
                        var currencyIndex = pricelists.indexOf(priceList.toString());
                        return prices[currencyIndex] || '';
                    } catch (e) {
                        console.error(e);
                    }
                    return '';
                },
                get_pricelist: function (product) {
                    try {
                        var priceList = '41';
                        if (window._swati && window._swati._pricelist) {
                            priceList = window._swati._pricelist;
                        }
                        var currencyIndex = product['pricelists'].indexOf(priceList.toString());
                        let pObj = {
                            price_formatted: product['prices_formatted'][currencyIndex],
                            list_price_formatted: product['list_prices_formatted'][currencyIndex]
                        }
                        if (product['new_product'][currencyIndex]) {
                            pObj.badge = getLocalisedString('labels.badge.is_new', 'New');
                            pObj.badge_type = 'primary';
                        } else if (isProductRecommended(product.id, 'popular')) {
                            pObj.badge = getLocalisedString('labels.badge.bestseller', 'Bestseller');
                            pObj.badge_type = 'bestseller';
                        } else if (isProductRecommended(product.id, 'trending')) {
                            pObj.badge = getLocalisedString('labels.badge.trending', 'Trending');
                            pObj.badge_type = 'trending';
                        } else if (product['show_on_sale'][currencyIndex]) {
                            pObj.badge = getLocalisedString('labels.badge.on_sale', 'Save %')
                                .replace(/%/, product['discounts'][currencyIndex] + '%').replace(/\n/g,
                                    "<br />");
                            pObj.badge_type = 'discount';
                        }
                        return pObj;
                    } catch (e) {
                        console.error(e);
                    }
                    return '';
                },
                is_even: function (no) {
                    if (typeof no === 'number') {
                        return no % 2 === 0;
                    }
                    return false;
                }
            }
        });
        if (localStorage) {
            const email = localStorage.getItem('email');
            if (email) {
                Clerk('call', 'log/email', {
                    email: email
                });
            }
        }
    </script>


    <script>
        window.stamped_disable_font = true;
    </script>
    <script type="text/javascript" src="https://cdn1.stamped.io/files/widget.min.js"> </script>
    <script type="text/javascript">
        //<![CDATA[\
        StampedFn.init({
            apiKey: 'pubkey-e8N8Z6eGMW1Rc4G9H3Y1MmF7iph9H0',
            storeUrl: 'www.swati.com'
        });
        // ]]>
    </script>
</head>

<body class=" ">
    <header class="header" data-parent=".toggle-mobile-menu">
        <div class="header__top justify-content-end justify-content-lg-center">
            <div class="header-promo">
                <p id="promoMessage" data-free-shipping="FREE SHIPPING ON ALL ORDERS
" data-promo-message="FREE SHIPPING ON ORDERS ABOVE 79
">FREE SHIPPING ON ORDERS ABOVE $99 USD</p>
            </div>
        </div>
        <div class="header__row ">
            <div class="icon i1 toggle d-flex toggle-mobile-menu invert" id="toggleMobileMenu"
                data-target="header.header" data-toggle="off-canvas"></div>
            <div class="icon search d-flex d-xl-none toggle-search invert" id="toggleSearch"
                data-toggle="search-canvas"></div>
            <div class="header__row-container">
                <div class="container-fluid" style="max-width: 1500px">
                    <ul class="header__row-menu">
                        <li>
                            <ul class="header-links">
                                <li class="header__link header__link-multiple">
                                    <a href="https://www.swati.com/coloured-contact-lenses/">Coloured Lenses<span
                                            class="icon i6 arrow-down"> </span></a>
                                    <nav>
                                        <div class="container py-4">
                                            <div class="row">
                                                <div
                                                    class="col d-flex flex-column text-left header__link-multiple-sub-link">
                                                    <span class="h5"> Shop by Duration</span>
                                                    <ul>
                                                        <li><a
                                                                href="https://www.swati.com/coloured-contact-lenses/6-months-contact-lenses/">
                                                                6-Months Lenses</a></li>
                                                        <li><a
                                                                href="https://www.swati.com/coloured-contact-lenses/monthly-contact-lenses/">
                                                                1-Month Lenses</a></li>
                                                        <li><a href="https://www.swati.com/coloured-contact-lenses/">
                                                                Show all</a></li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="col d-flex flex-column text-left header__link-multiple-sub-link">
                                                    <span class="h5"> Shop by Eyecolour</span>
                                                    <ul>
                                                        <li><a
                                                                href="https://www.swati.com/coloured-contact-lenses/blue-contact-lenses/">
                                                                Blue Lenses</a></li>
                                                        <li><a
                                                                href="https://www.swati.com/coloured-contact-lenses/brown-contact-lenses/">
                                                                Brown Lenses</a></li>
                                                        <li><a
                                                                href="https://www.swati.com/coloured-contact-lenses/green-contact-lenses/">
                                                                Green Lenses</a></li>
                                                        <li><a
                                                                href="https://www.swati.com/coloured-contact-lenses/grey-contact-lenses/">
                                                                Grey Lenses</a></li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="col d-flex flex-column text-left header__link-multiple-sub-link">
                                                    <span class="h5">Accessories</span>
                                                    <ul>
                                                        <li><a
                                                                href="https://www.swati.com/coloured-contact-lenses/contact-lens-care/">
                                                                Contact Lens Care</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </li>
                                <li class="header__link header__link-multiple">
                                    <a href="https://www.swati.com/cosmetics/">Cosmetics<span
                                            class="icon i6 arrow-down"> </span></a>
                                    <nav>
                                        <div class="container py-4">
                                            <div class="row">
                                                <div
                                                    class="col d-flex flex-column text-left header__link-multiple-sub-link">
                                                    <span class="h5">Shop by Category</span>
                                                    <ul>
                                                        <li><a
                                                                href="https://www.swati.com/cosmetics/make-up/">Make-up</a>
                                                        </li>
                                                        <li><a href="https://www.swati.com/cosmetics/lash-serum/">Lash
                                                                Serum</a></li>
                                                        <li><a
                                                                href="https://www.swati.com/cosmetics/eyelashes/">Eyelashes</a>
                                                        </li>
                                                        <li><a href="https://www.swati.com/cosmetics/">Show all</a></li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="col d-flex flex-column text-left header__link-multiple-sub-link">
                                                    <span class="h5">Accessories</span>
                                                    <ul>
                                                        <li><a
                                                                href="https://www.swati.com/cosmetics/brushes-and-tools/">Make-up
                                                                Tools</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </li>
                            </ul>
                        </li>
                        <li><a href="index.html">
                                <div class="swati-logo" style="height: 32px;width: 180px;background-position: bottom;">
                                </div><span class="sr-only">SWATI Cosmetics Logo</span>
                            </a></li>
                        <li>
                            <ul class="header-links">
                                <li class="header__link"><a href="https://www.swati.com/bundles-and-sets/">Bundle
                                        Deals</a></li>
                                <li class="header__link"><a href="https://www.swati.com/our-story/">Our Story</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="container-fluid headtop"
                        style="max-width: 1500px;padding-right:0px !important; padding-left:0px !important;">
                        <marquee direction="right" style="padding-top:6px;" behavior="alternate">
                            <span class="text-stroke-naz">VIP ACCESS</span>
                            <span class="text-naz">VIP ACCESS</span>
                            <span class="text-stroke-naz">VIP ACCESS</span>
                            <span class="text-naz">VIP ACCESS</span>
                            <span class="text-stroke-naz">VIP ACCESS</span>
                            <span class="text-naz">VIP ACCESS</span>
                            <span class="text-stroke-naz">VIP ACCESS</span>
                            <span class="text-naz">VIP ACCESS</span>
                            <span class="text-stroke-naz">VIP ACCESS</span>
                        </marquee>
                    </div>
                </div>
            </div>

            <div id="mobileMenu" data-parent="#toggleMobileMenu"
                class="off-canvas off-canvas__left mobile-menu-off-canvas has-header"
                style="transform: translate(-100%, 0);">
                <div class="off-canvas__content">
                    <header class="off-canvas__header p-0">
                        <div class="d-flex h-100 align-items-center justify-content-center">
                            <div class="country-picker form-group pl-5">
                                <span class="selected-country-flag" style="margin-left: 1rem;"></span>
                                <select id="shippingCountryPicker" class="country-select form-control" required>
                                </select>
                                <label class="form-control-placeholder" for="shippingCountryPicker">Shipping to</label>
                            </div>
                            <div class="language-picker form-group">
                                <!--<select id="languagePicker" class="language-select form-control">-->
                                <select id="languagePicker" class="language-select form-control">
                                    <option value="sv-se" data-uri="se/" selected>Svenska</option>
                                    <option value="en" data-uri="/">English</option>
                                    <option value="de-de" data-uri="de/">Deutsch</option>
                                    <option value="fr-fr" data-uri="fr/">Français</option>
                                    <option value="it-it" data-uri="it/">Italiano</option>

                                </select>
                                <label class="form-control-placeholder" for="languagePicker">Language</label>
                            </div>
                        </div>
                    </header>
                    <button type="button" class="off-canvas__close close" data-dismiss="off-canvas" aria-label="Close">
                        <span aria-hidden="true" class="icon close"> </span>
                    </button>
                    <div class="off-canvas__body ">

                        <div class="mobile-header__row">
                            <h5>Shop now <a href="https://www.swati.com/shop/" class="right-link">Show all</a></h5>
                            <details class="mobile-header__row border-0 media p-0 position-relative">
                                <summary class="d-flex justify-content-between align-items-center">
                                    <div class="media py-2 position-relative">
                                        <img class="align-self-center mr-2 lazy-swati"
                                            data-src="https://images.prismic.io/swati/86a3034b-febf-4560-b8dd-7ce34492c0f0_Natural_bundle_6M_0820.png?auto=compress,format&amp;rect=233,8,1531,1531&amp;w=40&amp;h=40"
                                            alt="SWATI Lenses available in both 6 months and monthly duration"
                                            height="40" width="40" />

                                        <div class="media-body align-self-center">
                                            <a class=" " href="https://www.swati.com/coloured-contact-lenses/">Coloured
                                                Lenses</a>
                                        </div>
                                    </div>

                                    <span class="icon arrow-down"> </span>
                                </summary>
                                <div
                                    class="mobile-header__row mobile-header__row-nested information-block position-relative border-0">
                                    <a class="stretched-link"
                                        href="https://www.swati.com/coloured-contact-lenses/6-months-contact-lenses/">6-Months
                                        Lenses</a>
                                </div>
                                <div
                                    class="mobile-header__row mobile-header__row-nested information-block position-relative border-0">
                                    <a class="stretched-link"
                                        href="https://www.swati.com/coloured-contact-lenses/monthly-contact-lenses/">1-Month
                                        Lenses</a>
                                </div>
                                <div
                                    class="mobile-header__row mobile-header__row-nested information-block position-relative border-0 border-bottom">
                                    <a class="stretched-link"
                                        href="https://www.swati.com/coloured-contact-lenses/contact-lens-care/">Contact
                                        Lens Care</a>
                                </div>
                                <details class="mobile-header__row border-0 media p-0 position-relative">
                                    <summary class="d-flex justify-content-between align-items-center">
                                        <div class="media py-2 position-relative">
                                            <img class="align-self-center mr-2 lazy-swati"
                                                data-src="https://images.prismic.io/swati/9ac4ce6d-97df-4adb-930f-c8553f29d87b_protect+lenses+colour%404x.png?auto=compress,format&amp;rect=0,0,537,537&amp;w=40&amp;h=40"
                                                alt="Protects Lens Colour Vector" height="40" width="40" />

                                            <div class="media-body align-self-center">
                                                <div>Shop by Eyecolour</div>
                                            </div>
                                        </div>

                                        <span class="icon arrow-down"> </span>
                                    </summary>
                                    <div
                                        class="mobile-header__row mobile-header__row-nested information-block position-relative border-0">
                                        <a class="stretched-link"
                                            href="https://www.swati.com/coloured-contact-lenses/blue-contact-lenses/">Blue
                                            Lenses</a>
                                    </div>
                                    <div
                                        class="mobile-header__row mobile-header__row-nested information-block position-relative border-0">
                                        <a class="stretched-link"
                                            href="https://www.swati.com/coloured-contact-lenses/brown-contact-lenses/">Brown
                                            Lenses</a>
                                    </div>
                                    <div
                                        class="mobile-header__row mobile-header__row-nested information-block position-relative border-0 border-bottom">
                                        <a class="stretched-link"
                                            href="https://www.swati.com/coloured-contact-lenses/green-contact-lenses/">Green
                                            Lenses</a>
                                    </div>
                                    <div
                                        class="mobile-header__row mobile-header__row-nested information-block position-relative border-0 border-bottom">
                                        <a class="stretched-link"
                                            href="https://www.swati.com/coloured-contact-lenses/grey-contact-lenses/">Grey
                                            Lenses</a>
                                    </div>
                                </details>
                            </details>
                            <details class="mobile-header__row border-0 media p-0 position-relative">
                                <summary class="d-flex justify-content-between align-items-center">
                                    <div class="media py-2 position-relative">
                                        <img class="align-self-center mr-2 lazy-swati"
                                            data-src="https://images.prismic.io/swati/3e0f3f54-fdee-41db-873b-1d7da78bcd2c_lash-boosting-mascara-and-serum-pr-kit.png?auto=compress,format&amp;rect=42,41,717,717&amp;w=40&amp;h=40"
                                            alt="" height="40" width="40" />

                                        <div class="media-body align-self-center">
                                            <a class=" " href="https://www.swati.com/cosmetics/">Cosmetics</a>
                                        </div>
                                    </div>

                                    <span class="icon arrow-down"> </span>
                                </summary>
                                <div
                                    class="mobile-header__row mobile-header__row-nested information-block position-relative border-0">
                                    <a class="stretched-link"
                                        href="https://www.swati.com/cosmetics/make-up/">Make-up</a>
                                </div>
                                <div
                                    class="mobile-header__row mobile-header__row-nested information-block position-relative border-0">
                                    <a class="stretched-link" href="https://www.swati.com/cosmetics/lash-serum/">Lash
                                        Serum</a>
                                </div>
                                <div
                                    class="mobile-header__row mobile-header__row-nested information-block position-relative border-0">
                                    <a class="stretched-link"
                                        href="https://www.swati.com/cosmetics/eyelashes/">Eyelashes</a>
                                </div>
                                <div
                                    class="mobile-header__row mobile-header__row-nested information-block position-relative border-0 border-bottom">
                                    <a class="stretched-link"
                                        href="https://www.swati.com/cosmetics/brushes-and-tools/">Make-up Tools</a>
                                </div>
                            </details>
                            <div class="media py-2 position-relative">
                                <img class="align-self-center mr-2 lazy-swati"
                                    data-src="https://images.prismic.io/swati/11da99cc-d79c-48cd-9b70-e5811f644475_glam-eye-makeup-kit.png?auto=compress,format&amp;rect=44,44,714,714&amp;w=40&amp;h=40"
                                    alt="SWATI Glam kit with Vanta eyeliner, lash applicator and tiger&#039;s eye lashes."
                                    height="40" width="40" />

                                <div class="media-body align-self-center">
                                    <a class=" stretched-link" href="https://www.swati.com/bundles-and-sets/">Bundle
                                        Deals</a>
                                </div>
                            </div>

                        </div>
                        <div class="mobile-header__row information-block">
                            <h5>Information</h5>
                            <div class="row mx-n1">
                                <a href="https://www.swati.com/our-story/" class="col mobile-header__image-link px-1">
                                    <div class="img-hover__zoom">
                                        <img class="img-fluid lazy-swati"
                                            data-src="https://images.prismic.io/swati/536c6812-a410-4ce5-bbcd-64daf294daea_SWATI+Cosmetics+Founders+Vishal+Nanda+%26+Swati+Verma.png?auto=compress,format&amp;rect=33,0,820,820&amp;w=100&amp;h=100"
                                            alt="Swati Verma &amp; Vishal Nanda, founder of SWATI Cosmetics" />

                                    </div>
                                    Our Story
                                </a>
                                <a href="https://www.swati.com/reviews/" class="col mobile-header__image-link px-1">
                                    <div class="img-hover__zoom">
                                        <img class="img-fluid lazy-swati"
                                            data-src="https://images.prismic.io/swati/f91aa4aa-ac2c-4b0e-8eef-ede76a938342_SWATI+Cosmetics+lookbook+turquoise+look.jpg?auto=compress,format&amp;rect=633,20,538,538&amp;w=100&amp;h=100"
                                            alt="Look created with Turquoise Blue/Green coloured lenses" />

                                    </div>
                                    Reviews
                                </a>
                                <a href="https://www.swati.com/how-to-use-contact-lenses/"
                                    class="col mobile-header__image-link px-1">
                                    <div class="img-hover__zoom">
                                        <img class="img-fluid lazy-swati"
                                            data-src="https://images.prismic.io/swati/6b364f35-6fe3-4b12-8afc-ad359a12fe54_Anisa++Wearing+Swati+Jade+Coloured+Lenses.png?auto=compress,format&amp;rect=396,0,1200,1200&amp;w=100&amp;h=100"
                                            alt="How do SWATI Green Coloured Jade lenses look on dark brown eyes?" />

                                    </div>
                                    How To Use
                                </a>
                                <a href="https://www.swati.com/inspirations/"
                                    class="col mobile-header__image-link px-1">
                                    <div class="img-hover__zoom">
                                        <img class="img-fluid lazy-swati"
                                            data-src="https://images.prismic.io/swati/a7e5b79a-ec7f-4e1c-aaac-c79da3eab86c_How+to+Use+coloured+lenses+cover+image.jpg?auto=compress,format&amp;rect=626,13,748,748&amp;w=100&amp;h=100"
                                            alt="Look created with Bronze brown coloured lenses" />

                                    </div>
                                    Inspirations
                                </a>
                            </div>
                        </div>
                        <div class="mobile-header__row information-block position-relative ">
                            <a class="mobile-header__link stretched-link"
                                href="https://www.swati.com/ambassador/">Become Ambassador</a>
                        </div>

                        <div class="mobile-header__row information-block position-relative ">
                            <a class="mobile-header__link stretched-link"
                                href="https://www.swati.com/become-reseller/">Become Reseller</a>
                        </div>

                        <div class="mobile-header__row information-block position-relative ">
                            <a class="mobile-header__link stretched-link" href="https://www.swati.com/blogs/">Blog &amp;
                                News</a>
                        </div>

                        <div class="mobile-header__row information-block position-relative ">
                            <a class="mobile-header__link stretched-link"
                                href="https://www.swati.com/lookbook/">Lookbook</a>
                        </div>

                        <div class="mobile-header__row information-block position-relative ">
                            <a class="mobile-header__link stretched-link"
                                href="https://www.swati.com/contact-us/">Contact us</a>
                        </div>

                        <div class="mobile-header__row information-block position-relative ">
                            <a class="mobile-header__link stretched-link" href="https://tracking.swati.com/"
                                target="_blank" rel="noopener">Track order</a>
                        </div>

                        <div class="mobile-header__row information-block position-relative ">
                            <a class="mobile-header__link stretched-link"
                                href="https://www.swati.com/upload-prescription/">Upload Prescription</a>
                        </div>

                        <details class="mobile-header__row information-block position-relative">
                            <summary class="mobile-header__link">LEGAL <span class="icon arrow-down" style="right:15px">
                                </span></summary>
                            <div class="mobile-header__row information-block position-relative ">
                                <a class="mobile-header__link stretched-link"
                                    href="https://www.swati.com/return-policy/">Delivery &amp; returns</a>
                            </div>

                            <div class="mobile-header__row information-block position-relative ">
                                <a class="mobile-header__link stretched-link"
                                    href="https://www.swati.com/terms-of-use/">Terms &amp; conditions</a>
                            </div>

                            <div class="mobile-header__row information-block position-relative ">
                                <a class="mobile-header__link stretched-link"
                                    href="https://www.swati.com/privacy-policy/">Privacy Policy</a>
                            </div>

                            <div class="mobile-header__row information-block position-relative ">
                                <a class="mobile-header__link stretched-link"
                                    href="https://www.swati.com/rx-verification/">RX Verification</a>
                            </div>

                        </details>
                    </div>
                </div>
                <div class="off-canvas__backdrop " data-dismiss="off-canvas" style=""></div>
            </div>
            <div class="header__toolbar">
                <div class="header__toolbar-left d-flex">
                    <div class="language">
                        <div class="language-picker toggle-mobile-menu" data-target="header.header"
                            data-toggle="off-canvas">
                            <!-- <span class="selected-country-flag"></span>-->
                            <span class="language-label d-none d-xl-flex"><img class="selected-country-flag"
                                    style="border-radius: 52%;width: 20px;height: 20px;object-fit: cover;"
                                    src="https://www.swati.com/assets/fonts/se.svg"><span
                                    style="padding-top:2px;">Svenska</span></span>
                            <span class="icon i6 arrow-down white"> </span>
                        </div>
                        <div class="toggle-search toggle-search-desktop pr-2 d-none d-xl-flex">
                            <span class="icon search px-2"> </span><span class="mr-1">Search products</span>
                        </div>
                    </div>

                    <div class="personalise" id="togglePersonaliseModal">
                        <span class="personalise-label mr-1">Personalise</span>
                        <span class="icon i6 arrow-down white"> </span>
                    </div>

                </div>
                <div class="header__toolbar-right d-flex">
                    <span class="pull-left">
                        <i class="fa-duotone fa-heart" style="color:#ff7b9a;font-size:16px;"></i><span class=""> 1
                        </span>
                    </span>
                    <span class="icon cart i5 position-relative mx-2 toggle-cart" id="toggleCart"
                        data-target="#cartOffCanvas"><span class=""> 1 </span></span>
                </div>
            </div>
            <div id="searchCanvas" data-parent=".toggle-search"
                class="off-canvas off-canvas__top off-canvas__left-md has-header"
                style="transform: translate(0, -100%);">
                <div class="off-canvas__content">
                    <header class="off-canvas__header ">
                        <div class="d-flex pr-5 pl-3">
                            <span class="icon i4 search invert"> </span>
                            <input id="swatiSearch" aria-label="search" type="text" class="search-input"
                                placeholder="Type your query here">
                        </div>
                    </header>
                    <button type="button" class="off-canvas__close close" data-dismiss="off-canvas" aria-label="Close">
                        <span aria-hidden="true" class="icon close"> </span>
                    </button>
                    <div class="off-canvas__body ">
                        <span class="clerk p-3" data-template="@product-search" data-api="search/predictive"
                            data-instant-search=".search-input" data-instant-search-positioning="off">
                        </span>
                        <h6 class="p-4 text-center m-0 search-response">Search products</h6>
                    </div>
                </div>
                <div class="off-canvas__backdrop " data-dismiss="off-canvas" style=""></div>
            </div>
        </div>
        <div id="cartOffCanvas" data-parent=".toggle-cart" class="off-canvas off-canvas__right  has-header"
            style="transform: translate(100%, 0);">
            <div class="off-canvas__content">
                <header class="off-canvas__header ">
                    <h3>Cart</h3>
                </header>
                <button type="button" class="off-canvas__close close" data-dismiss="off-canvas" aria-label="Close">
                    <span aria-hidden="true" class="icon close"> </span>
                </button>
                <div class="off-canvas__body cart-body">
                    <div class="unlock-shipping text-center compact"
                        data-unlock-shipping="<p>You're 79 away from <strong>FREE SHIPPING!</strong></p>"
                        data-unlocked-shipping="<p>You are eligible for <strong>FREE SHIPPING!</strong></p>"></div>
                    <p class="cart-empty lead text-center py-5">Your cart is empty</p>
                    <ul class="cart-items mb-0">

                    </ul>
                    <div class="media-template d-none">
                        <div class="media">
                            <img class="mr-3" src="index.html" data-bind="src:product.media.thumb[0]" alt="Product">
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-8 media-height">
                                        <div class="media-item">
                                            <h6 class="mt-0 mb-1" data-bind="product.name" data-stock="yes"
                                                data-preorder="Preorder"> </h6>
                                            <span data-bind="size" data-prefix="Variant: "> </span>
                                        </div>
                                        <details class="bundle-content" data-bind="data-bundle:isBundle">
                                            <summary>Package content <span class="icon arrow-down i6"></span></summary>
                                            <span data-bind="bundleContent" class="bundle-content-products"></span>
                                        </details>
                                        <div class="media-quantity">
                                            Qt. <strong data-bind="quantity">1</strong>
                                            <div class="quantity-buttons" data-bind="data-line:line">
                                                <button class="quantity quantity__plus" data-event-bind="changeQuantity"
                                                    data-bind="data-plus:quantity"> </button>
                                                <button class="quantity quantity__minus"
                                                    data-event-bind="changeQuantity" data-bind="data-minus:quantity">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 media-height text-right media-price">
                                        <button type="button" class="close" aria-label="Close">
                                            <span aria-hidden="true" class="icon i4 close"
                                                data-event-bind="removeProduct" data-bind="data-line:line"> </span>
                                        </button>
                                        <div style="display: flex; flex-direction: column;">
                                            <span data-bind="totalPriceBeforeDiscount" class="product-old-price">
                                            </span>
                                            <strong data-bind="totalPrice"> </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="off-canvas__footer">
                    <div class="off-canvas__footer-content">
                        <div class="d-none mb-2">
                            <span>DISCOUNT</span>
                            <strong class="price" id="discountPrice" data-bind="totals.totalDiscountPrice">
                            </strong><br>
                        </div>
                        <div>
                            <span>TOTAL</span>
                            <strong class="price" id="cartPrice"> </strong><br>
                        </div>
                        <a href="https://www.swati.com/checkout/" id="goToCheckout"
                            class="btn btn-primary btn-lg btn-block mt-3">Go to checkout</a>
                    </div>
                    <div id="addEssentialContainer"></div>
                </footer>
            </div>
            <div class="off-canvas__backdrop no-opacity" data-dismiss="off-canvas" style=""></div>
        </div>
        <div class="modal modal-fade modal-personalise" id="personaliseModal" aria-hidden="true">
            <div class="modal__backdrop" tabindex="-1" data-close-modal>
                <div class="personalise-container modal__container" role="dialog" aria-modal="true"
                    aria-labelledby="personaliseModalTitle">
                    <header class="modal__header">
                        <h2 class="mb-1 personalise-title" id="personaliseModalTitle">Get personalised suggestions and
                            recommendations<br />
                        </h2>
                        <button type="button" class="icon i2 close" data-close-modal aria-label="Close">
                        </button>
                    </header>
                    <main class="modal__content content">
                        <p class="mt-3 mb-0 personalise-desc">What is your eye colour?<br />
                        </p>
                        <div class="row text-center flex-wrap eye-color p-3 text-uppercase">
                            <div class="col-3 pb-5 pb-sm-4 px-0">
                                <div class="eye-container" data-key="blue">
                                    <div class="eye-image img-hover__zoom rounded-circle">
                                        <img class="w-100 lazy-swati"
                                            data-src="https://images.prismic.io/swati/501f1b45-9921-4b72-8076-40b0137267dc_blue-eye-colour.png?auto=compress,format&amp;rect=0,0,216,216&amp;w=100&amp;h=100"
                                            alt="Blue colour eyes" />

                                    </div>
                                    <div class="label">Blue
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 pb-5 pb-sm-4 px-0">
                                <div class="eye-container" data-key="bright-blue">
                                    <div class="eye-image img-hover__zoom rounded-circle">
                                        <img class="w-100 lazy-swati"
                                            data-src="https://images.prismic.io/swati/c4076fee-a9fa-42ad-954d-80747734d7b3_bright-blue-eye-colour.png?auto=compress,format&amp;rect=0,0,216,216&amp;w=100&amp;h=100"
                                            alt="Bright Blue colour eyes" />

                                    </div>
                                    <div class="label">Bright Blue
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 pb-5 pb-sm-4 px-0">
                                <div class="eye-container" data-key="blue-green">
                                    <div class="eye-image img-hover__zoom rounded-circle">
                                        <img class="w-100 lazy-swati"
                                            data-src="https://images.prismic.io/swati/37745c05-d18e-429c-8ffc-011366a6453c_blue-green-eye-colour.png?auto=compress,format&amp;rect=0,0,216,216&amp;w=100&amp;h=100"
                                            alt="Blue Green colour eyes" />

                                    </div>
                                    <div class="label">Blue Green
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 pb-5 pb-sm-4 px-0">
                                <div class="eye-container" data-key="green">
                                    <div class="eye-image img-hover__zoom rounded-circle">
                                        <img class="w-100 lazy-swati"
                                            data-src="https://images.prismic.io/swati/519c6192-be09-416e-bf20-6987cdc5e490_green-eye-colour.png?auto=compress,format&amp;rect=0,0,216,216&amp;w=100&amp;h=100"
                                            alt="Green colour eyes" />

                                    </div>
                                    <div class="label">Green
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 pb-5 pb-sm-4 px-0">
                                <div class="eye-container" data-key="light-brown">
                                    <div class="eye-image img-hover__zoom rounded-circle">
                                        <img class="w-100 lazy-swati"
                                            data-src="https://images.prismic.io/swati/d2d87eae-f8eb-4cbf-ae16-e64a1baf3097_light-brown-eye-colour.png?auto=compress,format&amp;rect=0,0,216,216&amp;w=100&amp;h=100"
                                            alt="Light Brown colour eyes" />

                                    </div>
                                    <div class="label">Light Brown
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 pb-5 pb-sm-4 px-0">
                                <div class="eye-container" data-key="medium-brown">
                                    <div class="eye-image img-hover__zoom rounded-circle">
                                        <img class="w-100 lazy-swati"
                                            data-src="https://images.prismic.io/swati/bdaf2e64-a039-41b4-8d4d-a8646b180f6f_medium-brown-eye-colour.png?auto=compress,format&amp;rect=0,0,216,216&amp;w=100&amp;h=100"
                                            alt="Medium Brown colour eyes" />

                                    </div>
                                    <div class="label">Medium Brown
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 pb-5 pb-sm-4 px-0">
                                <div class="eye-container" data-key="dark-brown">
                                    <div class="eye-image img-hover__zoom rounded-circle">
                                        <img class="w-100 lazy-swati"
                                            data-src="https://images.prismic.io/swati/0237ed9d-9eb4-4e31-bd5e-de38993fb381_dark-brown-eye-colour.png?auto=compress,format&amp;rect=0,0,216,216&amp;w=100&amp;h=100"
                                            alt="Dark Brown colour eyes" />

                                    </div>
                                    <div class="label">Dark Brown
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 pb-5 pb-sm-4 px-0">
                                <div class="eye-container" data-key="grey">
                                    <div class="eye-image img-hover__zoom rounded-circle">
                                        <img class="w-100 lazy-swati"
                                            data-src="https://images.prismic.io/swati/69160d2d-365c-4971-b490-b27c4df455c4_grey-eye-colour.png?auto=compress,format&amp;rect=0,0,216,216&amp;w=100&amp;h=100"
                                            alt="Grey colour eyes" />

                                    </div>
                                    <div class="label">Grey
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="index.html#" id="personaliseForm" name="personalise-form"
                            class="row pt-3 text-left">
                            <div class="col-12">
                                <label for="globalEyeColor" class="sr-only">Select your eye colour</label>
                                <input id="globalEyeColor" type="hidden">
                                <div class="invalid-feedback mt-0 mb-3">
                                    Please select your eye colour.
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="globalEyePowerSelect" class="sr-only">Select your eye power</label>
                                <select id="globalEyePowerSelect" class="select-eye-power form-control bg-white">
                                    <option value="" disabled="" selected="">SELECT YOUR EYE POWER</option>
                                    <option value="0.00">0.00</option>
                                    <option value="-0.50">-0.50</option>
                                    <option value="-0.75">-0.75</option>
                                    <option value="-1.00">-1.00</option>
                                    <option value="-1.25">-1.25</option>
                                    <option value="-1.50">-1.50</option>
                                    <option value="-1.75">-1.75</option>
                                    <option value="-2.00">-2.00</option>
                                    <option value="-2.25">-2.25</option>
                                    <option value="-2.50">-2.50</option>
                                    <option value="-2.75">-2.75</option>
                                    <option value="-3.00">-3.00</option>
                                    <option value="-3.25">-3.25</option>
                                    <option value="-3.50">-3.50</option>
                                    <option value="-3.75">-3.75</option>
                                    <option value="-4.00">-4.00</option>
                                    <option value="-4.25">-4.25</option>
                                    <option value="-4.50">-4.50</option>
                                    <option value="-4.75">-4.75</option>
                                    <option value="-5.00">-5.00</option>
                                    <option value="-5.25">-5.25</option>
                                    <option value="-5.50">-5.50</option>
                                    <option value="-5.75">-5.75</option>
                                    <option value="-6.00">-6.00</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select your eye power.
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="personalise-desc my-2">
                                    Receive personalised recommendations
                                </p>
                                <div class="input-group mb-2 input-icon ">
                                    <label for="personaliseEmail" class="sr-only">Enter Your Email</label>
                                    <input id="personaliseEmail" type="email" name="email" autocomplete="email"
                                        class="form-control  bg-white" placeholder="ENTER YOUR EMAIL">
                                    <div class="invalid-feedback">
                                        Please provide a valid email address
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="icon mail"> </i>
                                        </span>
                                    </div>
                                </div>

                                <div class="input-group mb-2 input-icon ">
                                    <label for="personalisePhone" class="sr-only">Phone Number</label>
                                    <input id="personalisePhone" type="tel" name="phone" autocomplete="tel"
                                        class="form-control  bg-white" placeholder="PHONE NUMBER"
                                        data-error-message="Please provide a valid phone number" />
                                    <div class="invalid-phone-feedback invalid-feedback order-last text-left">
                                        <span data-error-message="0">Please provide a valid phone number</span>
                                        <span data-error-message="1">You have provided an invalid country code</span>
                                        <span data-error-message="2">Provided number is too short</span>
                                        <span data-error-message="3">Provided number is too long</span>
                                        <span data-error-message="4">Please provide a valid phone number</span>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="icon phone"> </i>
                                        </span>
                                    </div>
                                </div>

                                <button type="submit" id="savePersonalisation"
                                    class="btn btn-primary btn-block">Save</button>
                                <div class="terms-policy-text mt-2">
                                    <p>Read our <a href="https://www.swati.com/privacy-policy/">privacy policy</a>
                                        informations to know how SWATI processes your personal data.</p>
                                </div>
                            </div>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </header>
    <main id="content" role="main">

        <section class="hero hero-full hero-full-video p-0" id="frontpage">

            <img src="images/slider1.jpg" style="object-fit: contain;width:100%;overflow: hidden;">
          
            <div class="hero-description d-block bg-pink p-10">
                <h2 class="primary__title text-center pt-3 text-blk">VIP ACCESS SINGLE DAY</h2>
                <span class="text-blk">Sign up and get early access to our Singles day offers</span>
                <br />
                <div class="d-inline-flex text-center pt-4 pb-4 pl-5 pr-5" style="width: 80% !important;"><input
                        class="form-control" placeholder="Enter your email address to reply...." id="apply"><button
                        class="btn btn-primary ml-3 " type="button" style="width:25%;">APPLY NOW!</button></div>
                <br />
            </div>
        </section>
        <section class="gridui-nz">
            <div class="row m-auto container-wide justify-content-left flex-row-reverse position-relative">
                <div class="col-12 col-md-6 text-left d-flex flex-column category-section-content text-white"
                    style="padding: 120px 50px !important;">
                    <div class="category-section-title h1 text-pink">
                        <h1
                            style="font-size:32px !important;text-align: left  !important;padding-bottom:0px !important;letter-spacing:0.1em !important;margin-bottom:0px !important;">
                            GET VIP ACCESS</h1>
                        <h3 style="font-size: 50px !important;font-family: inherit !important;"
                            class="text-pink font-weight-900">SINGLES DAY</h3>
                    </div>
                    <div class="category-section-description d-none d-lg-block">
                        <p>Our favourite day of the year is coming up and you don't want <br />to miss this one. Sign up
                            and get:</p>
                    </div>
                    <div class="category-section-button">
                        <div class="d-inline-block">
                            <span class="d-inline-flex pb-3">
                                <div class="pr-4 pt-1"><i class="fa-light fa-circle-check fa-3x text-pink"></i>
                                </div>
                                <div class="d-block ">
                                    <p class="text-white"
                                        style="font-size:20px !important;font-weight: 600;margin-bottom:0px !important;">
                                        Exclusive VIP access</p>
                                    <small class="text-light"
                                        style="font-size:14px !important;font-weight: 400;opacity: 0.5;">Shop your
                                        favourites before they sell out</small>
                                </div>
                            </span>
                            <br />
                            <span class="d-inline-flex">
                                <div class="pr-4 pt-1"><i class="fa-light fa-circle-check fa-3x text-pink"></i>
                                </div>
                                <div class="d-block">
                                    <p class="text-white"
                                        style="font-size:20px !important;font-weight: 600;margin-bottom:0px !important;">
                                        Up to 50% off</p>
                                    <small class="text-light"
                                        style="font-size:14px !important;font-weight: 400;opacity: 0.5;">Enjoy exclusive
                                        offer before anyone else</small>
                                </div>
                            </span>

                        </div>

                        <!--<a class="btn btn-lg btn-outline-primary px-lg-5"
                                            href="https://www.swati.com/bundles-and-sets/" target="_self">Shop Bundles
                                            Offers</a>-->
                    </div>
                </div>
                <div
                    class="col-12 col-md-6 d-flex flex-grow-1 justify-content-center flex-column text-center category-section-image-container">

                    <img src="images/swatiimg.png" class="img-responsive text-center">

                </div>
            </div>
        </section>
        <section class="swati-section  py-3 hider">
            <div class="container-fluid vertical-category">


                <div class="row">
                    <div class="col-6 col-md-3 p-1 px-md-2">
                        <a href="https://www.swati.com/coloured-contact-lenses/" class="vertical-category-item">
                            <div class="vertical-category-item-image">
                                <img class=" lazy-swati"
                                    data-src="https://images.prismic.io/swati/8745d839-b10a-4800-b66e-ce2198edd070_lenses.jpg?auto=compress,format"
                                    alt="Coloured circle contact lenses with prescription" />

                                <img class="vertical-category-item-image-hover lazy-swati"
                                    data-src="https://images.prismic.io/swati/05b97b8f-6977-40c1-8b3b-582ea386a176_lenses-hover.jpg?auto=compress,format"
                                    alt="Coloured circle contact lenses with prescription hover image" />

                            </div>
                            <div class="vertical-category-item-content">
                                <p>SHOP<br />
                                    LENSES</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 p-1 px-md-2">
                        <a href="https://www.swati.com/cosmetics/make-up/" class="vertical-category-item">
                            <div class="vertical-category-item-image">
                                <img class=" lazy-swati"
                                    data-src="https://images.prismic.io/swati/73ac4a86-c7c2-4b87-955f-be7b82e74bed_make-up.jpg?auto=compress,format"
                                    alt="SWATI vegan makeup products" />

                                <img class="vertical-category-item-image-hover lazy-swati"
                                    data-src="https://images.prismic.io/swati/c054528a-40d7-42f9-af66-601f13260eb1_make-up-hover.jpg?auto=compress,format"
                                    alt="SWATI vegan makeup products hover product image" />

                            </div>
                            <div class="vertical-category-item-content">
                                <p>SHOP<br />
                                    MAKE-UP</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 p-1 px-md-2">
                        <a href="https://www.swati.com/cosmetics/eyelashes/" class="vertical-category-item">
                            <div class="vertical-category-item-image">
                                <img class=" lazy-swati"
                                    data-src="https://images.prismic.io/swati/798de740-e2f3-49fd-8032-373162d175cf_lashes.jpg?auto=compress,format"
                                    alt="SWATI Cosmetics faux mink collection" />

                                <img class="vertical-category-item-image-hover lazy-swati"
                                    data-src="https://images.prismic.io/swati/19bb9f01-2066-4b81-a9aa-f53ac6bcd6da_lashes-hover.jpg?auto=compress,format"
                                    alt="SWATI Cosmetics faux mink collection hover image" />

                            </div>
                            <div class="vertical-category-item-content">
                                <p>SHOP<br />
                                    LASHES</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 p-1 px-md-2">
                        <a href="https://www.swati.com/cosmetics/lash-serum/" class="vertical-category-item">
                            <div class="vertical-category-item-image">
                                <img class=" lazy-swati"
                                    data-src="https://images.prismic.io/swati/2990b035-6a02-4e3e-930b-cb942b0aa71b_serum.jpg?auto=compress,format"
                                    alt="Eyelash + brow growth serum" />

                                <img class="vertical-category-item-image-hover lazy-swati"
                                    data-src="https://images.prismic.io/swati/7b6c2c5a-65c1-4062-a23c-a4e62a5f7460_serum-hover.jpg?auto=compress,format"
                                    alt="Eyelash + brow growth serum hover product image" />

                            </div>
                            <div class="vertical-category-item-content">
                                <p>SHOP<br />
                                    LASH+BROW<br />
                                    SERUM</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="hider">
            <div class="glide" id="categorySlider">
                <div data-glide-el="track" class="glide__track">
                    <ul class="glide__slides mb-0">
                        <li class="glide__slide category-section p-0 bg-onyx category-section-light ">
                            <div
                                class="row m-auto container-wide justify-content-center flex-row-reverse position-relative">
                                <div class="col-12 col-md-6 text-center d-flex flex-column category-section-content">
                                    <div class="category-section-title h1">
                                        <h1>They're Back!</h1>
                                    </div>
                                    <div class="category-section-description d-none d-lg-block">
                                        <p>Our best-sellers have just been restocked!<br />
                                            Grab them before they're sold out again.<br />
                                            ﻿LIMITED STOCK ONLY.</p>
                                    </div>
                                    <div class="category-section-button">
                                        <a class="btn btn-lg btn-outline-light px-lg-5"
                                            href="https://www.swati.com/coloured-contact-lenses/" target="_self">Shop
                                            Now</a>
                                    </div>
                                </div>
                                <div
                                    class="col-12 col-md-6 d-flex flex-grow-1 justify-content-center flex-column text-center category-section-image-container">
                                    <picture>
                                        <img class="category-section-image lazy-swati"
                                            data-src="https://images.prismic.io/swati/8a317b14-79f8-43a7-95be-e83f5ab30aa3_Back+in+Stock_800x800-01+%284%29.jpg?auto=compress,format"
                                            alt="SWATI Lenses back in stock" style="" />
                                    </picture>

                                </div>
                            </div>
                        </li>
                        <li class="glide__slide category-section p-0 bg-grazia-pink category-section-light ">
                            <div
                                class="row m-auto container-wide justify-content-center flex-row-reverse position-relative">
                                <div class="col-12 col-md-6 text-center d-flex flex-column category-section-content">
                                    <div class="category-section-title h1">
                                        <h1>Loved by the experts!</h1>
                                    </div>
                                    <div class="category-section-description d-none d-lg-block">
                                        <p>We're listed by the editorial team at GRAZIA as the coolest brand that
                                            millennials love</p>
                                    </div>
                                    <div class="category-section-button">
                                        <a class="btn btn-lg btn-outline-light px-lg-5"
                                            href="https://www.swati.com/shop/" target="_self">Shop Now</a>
                                    </div>
                                </div>
                                <div
                                    class="col-12 col-md-6 d-flex flex-grow-1 justify-content-center flex-column text-center category-section-image-container">
                                    <picture>
                                        <img class="category-section-image lazy-swati"
                                            data-src="https://images.prismic.io/swati/84f134f3-37fa-4f1c-964f-a783834848bb_GLB+LOGO+Final+%281%29.png?auto=compress,format"
                                            alt="SWATI is now GRAZIA most loved brand" style="" />
                                    </picture>

                                </div>
                            </div>
                        </li>
                        <li class="glide__slide category-section p-0 bg-vanta  ">
                            <div
                                class="row m-auto container-wide justify-content-center flex-row-reverse position-relative">
                                <div class="col-12 col-md-6 text-center d-flex flex-column category-section-content">
                                    <div class="category-section-title h1">
                                        <h1>Bundled Offers</h1>
                                    </div>
                                    <div class="category-section-description d-none d-lg-block">
                                        <p>Are you looking for the perfect gift set for yourself or a loved one? Look
                                            here! We have a bundle for every mood and occasion.</p>
                                    </div>
                                    <div class="category-section-button">
                                        <a class="btn btn-lg btn-outline-primary px-lg-5"
                                            href="https://www.swati.com/bundles-and-sets/" target="_self">Shop Bundles
                                            Offers</a>
                                    </div>
                                </div>
                                <div
                                    class="col-12 col-md-6 d-flex flex-grow-1 justify-content-center flex-column text-center category-section-image-container">
                                    <picture>
                                        <source type="image/webp"
                                            data-srcset="https://static.swati.com/product-images/royal-bundle-6-months-lenses.webp" />
                                        <img class="category-section-image lazy-swati"
                                            data-src="https://static.swati.com/product-images/royal-bundle-6-months-lenses.png"
                                            alt="SWATI Glam kit with Vanta eyeliner, lash applicator and tiger&#039;s eye lashes." />
                                    </picture>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="category-section__footer ">
                    <div class="glide__bullets" data-glide-el="controls[nav]">
                        <div class="glide__bullet" data-glide-dir="=0"> </div>
                        <div class="glide__bullet" data-glide-dir="=1"> </div>
                        <div class="glide__bullet" data-glide-dir="=2"> </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="swati-section alternate text-center alternate" id="productCarouselSection">
            <div class="container ">
                <h2 class="primary__title text-center mb-3">You may also like</h2>

                <?php 
                    echo "<pre> Response"; print_r($response); echo "</pre>";
                ?>
                <span class="clerk" data-template="@homepage-slider"></span>
            </div>
        </section>

        <section class="swati-section  text-center">
            <div class="container ">


                <div class="card flex-column-reverse flex-lg-row  sign-up-card mx-n1">
                    <div class="col-12 col-lg-8 py-4 px-3">
                        <div class="sign-up-card-content">
                            <h3 class="mt-lg-4">Sign up &amp; get 10% off</h3>
                            <div class="lead font-weight-normal mt-3 mb-4">
                                <p>Subscribe to our newsletters and stay up-to-date with new products and exclusive
                                    offers.</p>
                            </div>
                            <form action="index.html#" class="sign-up-card-form" id="signUpCardForm">
                                <div class="input-group mb-2 input-icon  input-group-default">
                                    <label for="-email-" class="sr-only">Enter Your Email</label>
                                    <input id="-email-" type="email" required name="email" autocomplete="email"
                                        class="form-control form-control-default bg-white"
                                        placeholder="ENTER YOUR EMAIL">
                                    <div class="invalid-feedback">
                                        Please provide a valid email address
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="icon mail"> </i>
                                        </span>
                                    </div>
                                </div>

                                <div class="input-group mb-2 input-icon  input-group-default">
                                    <label for="-phone-" class="sr-only">Phone Number</label>
                                    <input id="-phone-" type="tel" name="phone" autocomplete="tel"
                                        class="form-control form-control-default bg-white" placeholder="PHONE NUMBER"
                                        data-error-message="Please provide a valid phone number" />
                                    <div class="invalid-phone-feedback invalid-feedback order-last text-left">
                                        <span data-error-message="0">Please provide a valid phone number</span>
                                        <span data-error-message="1">You have provided an invalid country code</span>
                                        <span data-error-message="2">Provided number is too short</span>
                                        <span data-error-message="3">Provided number is too long</span>
                                        <span data-error-message="4">Please provide a valid phone number</span>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="icon phone"> </i>
                                        </span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mb-lg-3 mt-2">Submit</button>
                            </form>
                            <div id="signUpCardFormSuccess" class="text-center flex-grow-1 fadeIn"
                                style="display: none;">
                                <img class="success-svg img-fluid mb-2 lazy-swati"
                                    data-src="https://static.swati.com/img/complete.svg" alt="Success Icon"
                                    width="30" />

                                <div class="h5 mb-2">Thank You!</div>
                                <p>for subscribing to our newsletter.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-0">
                        <img class="sign-up-card-image mx-n1 lazy-swati"
                            data-src="https://images.prismic.io/swati/5cb52719-2804-4abf-aa71-88f0ba09bbe2_44f116fd-1102-422a-802d-8b34d5c4884f_SWATI%2BReseller%2BHeader%2BImage.png?auto=compress,format&amp;rect=0,0,2669,1779&amp;w=600&amp;h=400"
                            alt="SWATI Lenses inspiration picture -  Honey coloured lenses with lens solution" />

                    </div>
                </div>
            </div>
        </section>
        <section class="swati-section seo-page-description ">
            <div class="container ">


                <div class="text-center">

                    <div class="sw-lead-paragraph">
                        <h4>SWATI COSMETICS</h4>
                        <p>We&rsquo;re a Swedish company with Scandinavian values. We believe in equality and
                            empowerment for all. We celebrate style and beauty in all its forms. We never tell our
                            customers to be this or that. But we do encourage them to express themselves. All sides of
                            their personalities. All the nuances, from bright to dark and back again.</p>
                        <h4>SAY IT WITH YOUR EYES</h4>
                        <p>There are many sides to your personality, and we love you for it. Live them out, we say. Be
                            the starry-eyed beauty. Be the bright-eyed queen bee. Be the voluptuous super cougar with
                            fire in your eyes. Be everything at once. Be proud of everything that&rsquo;s you. All the
                            facets. All the nuances, from brightest blue to darkest brown. Express it. Own it. Wear it.
                            And let your eyes speak.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script type="text/javascript" src="https://www.swati.com/js/vendors.c5a38ce3cdd72d179543.min.js" defer></script>
    <script type="text/javascript" src="https://www.swati.com/js/main.1eba2440a5ec107278d9.min.js" defer></script>
    <footer class="bg-primary text-white">
        <div class="container-fluid py-5" style="max-width: 1400px">
            <div class="footer row">
                <div class="footer-item col-12 col-xl">
                    <div class="footer-logo mb-4">
                        <div class="swati-logo white"> </div>
                    </div>
                    <p>SWATI GROUP AB<br />
                        Kivra: 5590923123<br />
                        106 31 Stockholm, Sweden<br />
                        VAT: SE5590923123-01</p>
                    <p>support@swati.com</p>
                    <div class="h5 mt-4 mb-3">Follow us</div>
                    <div class="social-icons">
                        <a class="social-icon" target="_blank" rel="noopener"
                            href="https://www.facebook.com/swaticosmetics/">
                            <i class="icon i4 facebook"> </i>
                            <span class="sr-only">SWATI Cosmetics Facebook page</span>
                        </a>
                        <a class="social-icon" target="_blank" rel="noopener" href="https://twitter.com/swaticosmetics">
                            <i class="icon i4 twitter"> </i>
                            <span class="sr-only">SWATI Cosmetics Twitter profile</span>
                        </a>
                        <a class="social-icon" target="_blank" rel="noopener"
                            href="https://www.instagram.com/swaticosmetics/">
                            <i class="icon i4 instagram"> </i>
                            <span class="sr-only">SWATI Cosmetics Instagram profile</span>
                        </a>
                        <div class="w-100"></div>
                        <a class="social-icon" target="_blank" rel="noopener"
                            href="https://www.youtube.com/c/swaticosmetics">
                            <i class="icon i4 youtube"> </i>
                            <span class="sr-only">SWATI Cosmetics Youtube Channel</span>
                        </a>
                        <a class="social-icon" target="_blank" rel="noopener"
                            href="https://www.linkedin.com/company/swaticosmetics/">
                            <i class="icon i4 linkedin"> </i>
                            <span class="sr-only">SWATI Cosmetics LinkedIn page</span>
                        </a>
                        <a class="social-icon" target="_blank" rel="noopener"
                            href="https://www.tiktok.com/@swaticosmetics">
                            <i class="icon i4 tiktok"> </i>
                            <span class="sr-only">SWATI Cosmetics TikTok profile</span>
                        </a>
                    </div>
                </div>
                <div class="footer-item col-12 col-xl footer-links">
                    <div class="h5">Shop now</div>
                    <ul>
                        <li><a href="https://www.swati.com/coloured-contact-lenses/">Coloured Lenses</a></li>
                        <li><a href="https://www.swati.com/cosmetics/">Cosmetics</a></li>
                        <li><a href="https://www.swati.com/bundles-and-sets/">Bundle Deals</a></li>
                        <li class="w-100 p-3"> </li>
                        <li><a href="https://www.swati.com/how-to-use-contact-lenses/">How To Use</a></li>
                        <li><a href="https://www.swati.com/contact-us/">Contact us</a></li>
                        <li><a target="_blank" rel="noopener" href="https://tracking.swati.com/">Track order</a></li>
                        <li><a href="https://www.swati.com/upload-prescription/">Upload Prescription</a></li>
                    </ul>
                </div>
                <div class="footer-item footer-links col-12 col-xl">
                    <div class="h5">SWATI Cosmetics</div>
                    <ul>
                        <li><a href="https://www.swati.com/ambassador/">Become Ambassador</a></li>
                        <li><a href="https://www.swati.com/become-reseller/">Become Reseller</a></li>
                        <li><a href="https://www.swati.com/lookbook/">Lookbook</a></li>
                        <li><a target="_blank" rel="noopener" href="https://support.swati.com/">Support</a></li>
                        <li><a href="https://www.swati.com/blogs/">Blog &amp; News</a></li>
                    </ul>
                    <div class="h5 mt-4">LEGAL</div>
                    <ul>
                        <li><a href="https://www.swati.com/return-policy/">Delivery &amp; returns</a></li>
                        <li><a href="https://www.swati.com/terms-of-use/">Terms &amp; conditions</a></li>
                        <li><a href="https://www.swati.com/privacy-policy/">Privacy Policy</a></li>
                        <li><a href="https://www.swati.com/rx-verification/">RX Verification</a></li>
                    </ul>
                </div>
                <div class="footer-item d-flex flex-column col-12 col-xl">
                    <div class="h5">Join the SWATI Community</div>
                    <p class="mb-4">Stay in the loop! We give you news, campaigns, events as well as tips &amp; tricks.
                    </p>
                    <form action="index.html#" id="footerForm" name="footer-sign-up" class="flex-grow-1 fadeIn">
                        <div class="input-group mb-2 input-icon bg-white input-group-sm">
                            <label for="footerEmail" class="sr-only">Enter Your Email</label>
                            <input id="footerEmail" type="email" required name="email" autocomplete="email"
                                class="form-control form-control-sm bg-white" placeholder="ENTER YOUR EMAIL">
                            <div class="invalid-feedback">
                                Please provide a valid email address
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="icon mail"> </i>
                                </span>
                            </div>
                        </div>

                        <div class="input-group mb-2 input-icon bg-white input-group-sm">
                            <label for="footerPhone" class="sr-only">Phone Number</label>
                            <input id="footerPhone" type="tel" name="phone" autocomplete="tel"
                                class="form-control form-control-sm bg-white" placeholder="PHONE NUMBER"
                                data-error-message="Please provide a valid phone number" />
                            <div class="invalid-phone-feedback invalid-feedback order-last text-left">
                                <span data-error-message="0">Please provide a valid phone number</span>
                                <span data-error-message="1">You have provided an invalid country code</span>
                                <span data-error-message="2">Provided number is too short</span>
                                <span data-error-message="3">Provided number is too long</span>
                                <span data-error-message="4">Please provide a valid phone number</span>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="icon phone"> </i>
                                </span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-success">Subscribe</button>
                        </div>
                    </form>
                    <div id="footerFormSuccess" class="text-center flex-grow-1 fadeIn" style="display: none;">
                        <img class="success-svg img-fluid mb-2 lazy-swati"
                            data-src="https://static.swati.com/img/complete.svg" alt="Success Icon" width=30 />

                        <div class="h5 mb-2">Thank You!</div>
                        <p>for subscribing to our newsletter.</p>
                    </div>
                    <div class="payment-methods d-flex justify-content-between mt-5 mb-4">
                        <div class="payment-method klarna">
                            <img class=" "
                                src="https://images.prismic.io/swati/5803d914-2cd7-4f92-bcfe-f7d0cbe87900_klarna.svg?auto=compress,format"
                                alt="Pay using Klarna on SWATI.com" />

                        </div>
                        <div class="payment-method visa">
                            <img class=" "
                                src="https://images.prismic.io/swati/72054d2e-9378-49b5-a855-3fc1e63b2e9f_visa.svg?auto=compress,format"
                                alt="Visa secured checkout on SWATI.com" />

                        </div>
                        <div class="payment-method mc">
                            <img class=" "
                                src="https://images.prismic.io/swati/8e441022-62df-496d-85de-59de504ba200_mc.svg?auto=compress,format"
                                alt="Use your Mastercard on SWATI.com" />

                        </div>
                        <div class="payment-method maestro">
                            <img class=" "
                                src="https://images.prismic.io/swati/d9d6a730-71cd-4039-8cc6-9c4449693e25_maestro.svg?auto=compress,format"
                                alt="Use your Maestro card on SWATI.com" />

                        </div>
                        <div class="payment-method amex">
                            <img class=" "
                                src="https://images.prismic.io/swati/f4a2a08f-e120-4a0f-a3a7-f560e221161d_amex.svg?auto=compress,format"
                                alt="Use your American Express card on SWATI.com" />

                        </div>
                        <div class="payment-method paypal">
                            <img class=" "
                                src="https://images.prismic.io/swati/339e308a-4cfc-45a5-9cb9-52850716e8cf_paypal.svg?auto=compress,format"
                                alt="Use your Paypal account to purchase SWATI Products" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="privacyPolicy" data-parent="" class="off-canvas off-canvas__bottom privacy-policy "
        style="transform: translate(0, 100%);">
        <div class="off-canvas__content">
            <div class="off-canvas__body ">
                <div class="d-flex justify-content-between flex-lg-column">
                    <div class="prc-p mb-0 text-left align-self-center">
                        <p>Our site uses cookies and handles personal information to improve your experience. Read more
                            about it in our <a href="https://www.swati.com/privacy-policy/">Privacy Policy</a></p>
                    </div>
                    <button type="button"
                        class="btn btn-sm btn-success align-self-center ml-2 ml-lg-0 mt-lg-2 text-white"
                        data-dismiss="off-canvas" aria-label="Close" style="min-width: 112px;">
                        GOT IT!
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-fade modal-promotions" id="news-letter-0" data-modal-type="news-letter" data-variant="A"
        aria-hidden="false">
        <div class="modal__backdrop" tabindex="-1" data-close-modal="">
            <div class="modal__container lazy-swati bg-jade" role="dialog" aria-modal="true"
                aria-labelledby="news-letter-modal-title-0"
                data-bg="https://images.prismic.io/swati/91275988-09b4-435a-a10a-aee03cbc16e5_Anisa_Beauty_346_JADE.png?auto=compress,format">
                <div class="modal__content text-white">
                    <header class="modal__header">
                        <h2 id="news-letter-modal-title-0">FOR YOUR EYES ONLY!</h2>
                        <button type="button" class="icon i2 close" data-close-modal="" aria-label="Close">
                        </button>
                    </header>
                    <main class="my-4 text-center">
                        <div class="lead font-weight-normal" style="margin: 30px auto 50px!important;">
                            <p>Our newsletter includes the latest news and unique offers.</p>
                        </div>
                        <form action="index.html#" class="promotion-modal-form" id="news-letter-form-0">
                            <div class="input-group mb-2 input-icon  input-group-default">
                                <label for="news-letter-email-0" class="sr-only">Enter Your Email</label>
                                <input id="news-letter-email-0" type="email" required name="email" autocomplete="email"
                                    class="form-control form-control-default bg-white" placeholder="ENTER YOUR EMAIL">
                                <div class="invalid-feedback">
                                    Please provide a valid email address
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="icon mail"> </i>
                                    </span>
                                </div>
                            </div>

                            <div class="input-group mb-2 input-icon  input-group-default">
                                <label for="news-letter-phone-0" class="sr-only">Phone Number</label>
                                <input id="news-letter-phone-0" type="tel" name="phone" autocomplete="tel"
                                    class="form-control form-control-default bg-white" placeholder="PHONE NUMBER"
                                    data-error-message="Please provide a valid phone number" />
                                <div class="invalid-phone-feedback invalid-feedback order-last text-left">
                                    <span data-error-message="0">Please provide a valid phone number</span>
                                    <span data-error-message="1">You have provided an invalid country code</span>
                                    <span data-error-message="2">Provided number is too short</span>
                                    <span data-error-message="3">Provided number is too long</span>
                                    <span data-error-message="4">Please provide a valid phone number</span>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="icon phone"> </i>
                                    </span>
                                </div>
                            </div>

                            <button type="submit" id="news-letter-button-0" class="btn btn-block btn-primary mb-2">SIGN
                                UP</button>
                        </form>
                        <div class="terms-policy-text">
                            <p>Read our <a href="https://www.swati.com/privacy-policy/">privacy policy</a> informations
                                to know how SWATI processes your personal data.</p>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-fade modal-promotions" id="news-letter-1" data-modal-type="news-letter" data-variant="B"
        aria-hidden="false">
        <div class="modal__backdrop" tabindex="-1" data-close-modal="">
            <div class="modal__container lazy-swati bg-aquamarine" role="dialog" aria-modal="true"
                aria-labelledby="news-letter-modal-title-1"
                data-bg="https://images.prismic.io/swati/898276c2-8cde-498d-9eec-6fcb78b23a9e_Chanelle_Beauty_021_AQUA.png?auto=compress,format">
                <div class="modal__content text-white">
                    <header class="modal__header">
                        <h2 id="news-letter-modal-title-1">BE THE FIRST!</h2>
                        <button type="button" class="icon i2 close" data-close-modal="" aria-label="Close">
                        </button>
                    </header>
                    <main class="my-4 text-center">
                        <div class="lead font-weight-normal" style="margin: 30px auto 50px!important;">
                            <p><strong>Special discounts</strong> for our first customers.</p>
                        </div>
                        <form action="index.html#" class="promotion-modal-form" id="news-letter-form-1">
                            <div class="input-group mb-2 input-icon  input-group-default">
                                <label for="news-letter-email-1" class="sr-only">Enter Your Email</label>
                                <input id="news-letter-email-1" type="email" required name="email" autocomplete="email"
                                    class="form-control form-control-default bg-white" placeholder="ENTER YOUR EMAIL">
                                <div class="invalid-feedback">
                                    Please provide a valid email address
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="icon mail"> </i>
                                    </span>
                                </div>
                            </div>

                            <div class="input-group mb-2 input-icon  input-group-default">
                                <label for="news-letter-phone-1" class="sr-only">Phone Number</label>
                                <input id="news-letter-phone-1" type="tel" name="phone" autocomplete="tel"
                                    class="form-control form-control-default bg-white" placeholder="PHONE NUMBER"
                                    data-error-message="Please provide a valid phone number" />
                                <div class="invalid-phone-feedback invalid-feedback order-last text-left">
                                    <span data-error-message="0">Please provide a valid phone number</span>
                                    <span data-error-message="1">You have provided an invalid country code</span>
                                    <span data-error-message="2">Provided number is too short</span>
                                    <span data-error-message="3">Provided number is too long</span>
                                    <span data-error-message="4">Please provide a valid phone number</span>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="icon phone"> </i>
                                    </span>
                                </div>
                            </div>

                            <button type="submit" id="news-letter-button-1" class="btn btn-block btn-primary mb-2">GET
                                PROMO CODE</button>
                        </form>
                        <div class="terms-policy-text">
                            <p>Read our <a href="https://www.swati.com/privacy-policy/">privacy policy</a> informations
                                to know how SWATI processes your personal data.</p>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    window.intercomSettings = {
        app_id: "pith1dxy"
    };
    if (localStorage.getItem('name')) {
        window.intercomSettings.name = localStorage.getItem('name');
    }
    if (localStorage.getItem('email')) {
        window.intercomSettings.email = localStorage.getItem('email');
    }
</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://r.swati.com/ns.html?id=GTM-T6BL5VJ" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</html>