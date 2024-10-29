<!DOCTYPE html>
<?php 

    session_start();
    require_once 'DbConnect.php';  // Database connection

    // Fetch categories and subcategories
    $query = "SELECT c.category_id AS category_id, c.category_name AS category_name, c.icon AS category_icon, s.id AS subcategory_id, s.subcategory_name AS subcategory_name FROM category_list c LEFT JOIN subcategories s ON c.category_id = s.category_id";
    $result = mysqli_query($conn, $query);

    $categories = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $categories[$row['category_id']]['name'] = $row['category_name'];
        $categories[$row['category_id']]['icon'] = $row['category_icon'];
        if ($row['subcategory_id']) {
            $categories[$row['category_id']]['subcategories'][$row['subcategory_id']] = $row['subcategory_name'];
        }
    }

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Steps</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- SIMPLE-SCROLL-BAR -->
    <link rel="stylesheet" type="text/css" href="assets/css/simplebar.css">
    <!-- SIMPLE-SCROLL-BAR -->

    <link rel="stylesheet" href="assets/css/component-list-menu.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div id="shopify-section-sections--16700117319931__header" class="shopify-section shopify-section-group-header-group section-header">
        <div class="headtop d-lg-block d-none" style="background: #06623b;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-12 text-left">
                        <ul class="list-unstyled">
                            <li>
                                <svg viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.756 4.27604L10.1316 3.45258C9.81486 3.03479 9.18678 3.03479 8.86999 3.45258L8.24561 4.27604C7.88262 4.75475 7.2896 5.00039 6.69442 4.91856L5.67065 4.7778C5.15122 4.70638 4.70711 5.15049 4.77853 5.66992L4.91929 6.69369C5.00112 7.28887 4.75548 7.88189 4.27677 8.24488L3.45332 8.86926C3.03553 9.18605 3.03553 9.81413 3.45332 10.1309L4.27677 10.7553C4.75549 11.1183 5.00112 11.7113 4.91929 12.3065L4.77853 13.3303C4.70711 13.8497 5.15123 14.2938 5.67065 14.2224L6.69442 14.0816C7.2896 13.9998 7.88262 14.2454 8.24561 14.7241L8.87 15.5476C9.18678 15.9654 9.81486 15.9654 10.1316 15.5476L10.756 14.7241C11.119 14.2454 11.712 13.9998 12.3072 14.0816L13.331 14.2224C13.8504 14.2938 14.2945 13.8497 14.2231 13.3303L14.0824 12.3065C14.0005 11.7113 14.2462 11.1183 14.7249 10.7553L15.5483 10.1309C15.9661 9.81413 15.9661 9.18605 15.5483 8.86926L14.7249 8.24488C14.2462 7.88189 14.0005 7.28887 14.0824 6.69369L14.2231 5.66992C14.2945 5.15049 13.8504 4.70638 13.331 4.7778L12.3072 4.91856C11.712 5.00039 11.119 4.75475 10.756 4.27604ZM11.3933 2.49593C10.4429 1.24257 8.55871 1.24257 7.60834 2.49593L6.98396 3.31939C6.96667 3.34218 6.93843 3.35388 6.91009 3.34998L5.88632 3.20922C4.32804 2.99497 2.9957 4.32731 3.20995 5.88559L3.35071 6.90936C3.35461 6.9377 3.34291 6.96594 3.32012 6.98323L2.49667 7.60761C1.2433 8.55798 1.2433 10.4422 2.49667 11.3926L3.32012 12.017C3.34291 12.0342 3.35461 12.0625 3.35071 12.0908L3.20995 13.1146C2.9957 14.6729 4.32804 16.0052 5.88632 15.791L6.91009 15.6502C6.93843 15.6463 6.96667 15.658 6.98396 15.6808L7.60834 16.5042C8.55871 17.7576 10.4429 17.7576 11.3933 16.5042L12.0177 15.6808C12.035 15.658 12.0632 15.6463 12.0915 15.6502L13.1153 15.791C14.6736 16.0052 16.0059 14.6729 15.7917 13.1146L15.6509 12.0908C15.647 12.0625 15.6587 12.0342 15.6815 12.017L16.505 11.3926C17.7583 10.4422 17.7583 8.55798 16.505 7.60761L15.6815 6.98323C15.6587 6.96594 15.647 6.9377 15.6509 6.90936L15.7917 5.88559C16.0059 4.32731 14.6736 2.99497 13.1153 3.20922L12.0915 3.34998C12.0632 3.35388 12.035 3.34218 12.0177 3.31939L11.3933 2.49593Z"
                                        fill="#FEFEFE"></path>
                                    <path
                                        d="M11.6431 8.47646L8.47646 11.6431C8.16729 11.9523 7.66604 11.9523 7.35687 11.6431C7.04771 11.334 7.04771 10.8327 7.35687 10.5235L10.5235 7.35687C10.8327 7.04771 11.334 7.04771 11.6431 7.35687C11.9523 7.66604 11.9523 8.16729 11.6431 8.47646Z"
                                        fill="#FEFEFE"></path>
                                    <path
                                        d="M8.70833 7.91667C8.70833 8.35389 8.35389 8.70833 7.91667 8.70833C7.47944 8.70833 7.125 8.35389 7.125 7.91667C7.125 7.47944 7.47944 7.125 7.91667 7.125C8.35389 7.125 8.70833 7.47944 8.70833 7.91667Z"
                                        fill="#FEFEFE"></path>
                                    <path
                                        d="M10.2917 11.0833C10.2917 11.5206 10.6461 11.875 11.0833 11.875C11.5206 11.875 11.875 11.5206 11.875 11.0833C11.875 10.6461 11.5206 10.2917 11.0833 10.2917C10.6461 10.2917 10.2917 10.6461 10.2917 11.0833Z"
                                        fill="#FEFEFE"></path>
                                </svg>
                                <p>Get Special Deal today! Get 3 products for 2. Limited offer.
                                    <a href="#" class="hlink">read more</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col-12 text-right wish-cur">
                        <ul class="list-unstyled hwcur">
                            <li>
                                <form method="post" action="" id="FooterCountryForm"
                                    accept-charset="UTF-8" class="localization-form">
                                    <div class="disclosure">
                                        <button type="button" class="disclosure__button link">
                                            India
                                            <svg aria-hidden="true" focusable="false" role="presentation"
                                                class="icon icon-caret" viewBox="0 0 10 6">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z">
                                                </path>
                                            </svg>
                                        </button>
                                        <ul id="FooterCountryList" role="list"
                                            class="disclosure__list list-unstyled dropdown-menu-right"
                                            hidden="">
                                            <li class="disclosure__item" tabindex="-1">
                                                <a class="link link--text disclosure__link caption-large focus-inset"
                                                    href="#" data-value="DE">
                                                    Germany <span class="localization-form__currency">(EUR
                                                        €)</span>
                                                </a>
                                            </li>
                                            <li class="disclosure__item" tabindex="-1">
                                                <a class="link link--text disclosure__link caption-large disclosure__link--active focus-inset"
                                                    href="#" aria-current="true" data-value="US">
                                                    United States <span class="localization-form__currency">(USD
                                                        $)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </li>
                            <li>
                                <a href="#">My Account</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="modal-sidebar" data-target-custom="wishlist">My Wish List <span>(0)</span></a>
                            </li>
                            <li>
                            <?php if (isset($_SESSION['name'])): ?>
                                <a href="logout.php">Welcome, <?php echo strtoupper(htmlspecialchars($_SESSION['name'])); ?></a>
                            <?php else: ?>
                                <a href="javascript:void(0)" class="modal-sidebar text-uppercase" data-target-custom="login" class="text-uppercase">login In</a>
                            <?php endif; ?>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="modal-sidebar text-uppercase" data-target-custom="register" class="text-uppercase">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <sticky-header class="header-wrapper">
            <header class="header" style="background: #ffffff;">
                <div class="container">
                    <div class="header-top">
                        <div class="row htop">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-12 headlogo">
                                <h1 class="header__heading">
                                    <a href="index.php" class="header__heading-link link link--text focus-inset">
                                        <img src="assets/images/logo.svg" alt="">
                                    </a>
                                </h1>
                            </div>
                            <div class="col-xl-10 col-lg-9 col-md-8 col-12 text-right tright">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-8 col-12">
                                        <div class="header__icons">
                                            <div class="search-modal__content" tabindex="-1">
                                                <predictive-search class="search-modal__form" data-loading-text="Loading...">
                                                    <form action="/search" method="get" role="search"
                                                        class="search search-modal__form">
                                                        <div class="field">
                                                            <input class="search__input field__input"
                                                                id="Search-In-Modal" type="search" name="q" value=""
                                                                placeholder="Search for Product" role="combobox"
                                                                aria-expanded="false">
                                                            <button class="search__button field__button"
                                                                aria-label="Search">
                                                                <img src="assets/images/search.svg" alt="">
                                                            </button>
                                                        </div>
                                                    </form>
                                                </predictive-search>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-12 huscrt">
                                        <div class="d-flex gap-2">
                                            <div class="hdis-icon">
                                                <img src="assets/images/support.svg" alt="Customer Support">
                                            </div>
                                            <div class="hdis">
                                                <span class="main-title">987-654-3210</span>
                                                <span>
                                                    New Order & Customer Support
                                                </span>
                                            </div>
                                        </div>
                                        <div class="dropdown" id="cart-icon-bubble">
                                            <div data-toggle="dropdown">
                                                <div class="wbhcart modal-sidebar" data-target-custom="cart" style="background-color: #a8c73a">
                                                    <div class="headcart">
                                                        <span class="svgbg">
                                                            <svg viewBox="0 0 214.822 214.822">
                                                                <path d="M163.376,59.466h-7.91V48.053C155.465,21.555,133.908,0,107.411,0C80.914,0,59.356,21.558,59.356,48.053v11.413h-7.91 c-12.861,0-23.325,10.464-23.325,23.325v108.706c0,12.864,10.464,23.325,23.325,23.325h111.929
                                                                        c12.861,0,23.325-10.462,23.325-23.325V82.791C186.7,69.93,176.236,59.466,163.376,59.466z M74.573,48.053
                                                                        c0-18.106,14.73-32.836,32.838-32.836c18.106,0,32.836,14.73,32.836,32.836v11.413H74.573V48.053z M171.484,191.497
                                                                        c0,4.474-3.639,8.108-8.108,8.108H51.445c-4.471,0-8.108-3.637-8.108-8.108V82.791c0-4.471,3.637-8.108,8.108-8.108h7.91v10.67
                                                                        c-2.445,2.13-4.022,5.232-4.022,8.732c0,6.424,5.207,11.633,11.631,11.633c6.422,0,11.631-5.209,11.631-11.633
                                                                        c0-3.497-1.578-6.599-4.022-8.732v-10.67h65.674v10.67c-2.445,2.13-4.022,5.232-4.022,8.732c0,6.424,5.207,11.633,11.631,11.633
                                                                        s11.631-5.209,11.631-11.633c0-3.497-1.578-6.602-4.022-8.732v-10.67h7.91c4.471,0,8.108,3.637,8.108,8.108V191.497z">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        <span id="Cartcount">1</span>
                                                    </div>
                                                    <div class="hcart">
                                                        <span class="medium-hide small-hide">&nbsp;My Cart</span>
                                                        <h6 class="cart-tot">
                                                            ₹999.00
                                                        </h6>
                                                    </div>
                                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                                        class="icon icon-caret" viewBox="0 0 10 6">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </sticky-header>
    </div>

    <div class="cate-menu">
        <div class="container">
            <div class="row">
                <div class="hleftw">
                    <div id="shopify-section-site-nav" class="shopify-section index-section">
                        <div class="snavb">
                            <h3 class="whr-menu" data-bs-toggle="collapse" data-bs-target="#under-menu" aria-expanded="false" aria-label="Toggle navigation">
                                <button class="navbar-toggler d-flex" type="button" aria-label="Center Align">
                                    <svg width="16" height="16" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.33333 12.0001V6.66675H2V12.0001C2 13.4728 3.19391 14.6667 4.66667 14.6667H11.3333C12.8061 14.6667 14 13.4728 14 12.0001V6.66675H12.6667V12.0001C12.6667 12.7365 12.0697 13.3334 11.3333 13.3334H10V11.3334C10 10.2288 9.10457 9.33342 8 9.33342C6.89543 9.33342 6 10.2288 6 11.3334V13.3334H4.66667C3.93029 13.3334 3.33333 12.7365 3.33333 12.0001ZM7.33333 13.3334H8.66667V11.3334C8.66667 10.9652 8.36819 10.6667 8 10.6667C7.63181 10.6667 7.33333 10.9652 7.33333 11.3334V13.3334Z">
                                        </path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.07004 1.33325C3.96789 1.33325 2.88167 1.88249 2.28445 2.90006C2.09315 3.22601 1.87688 3.61565 1.70434 3.98795C1.61822 4.17375 1.53331 4.37588 1.46765 4.57715C1.40874 4.75773 1.33301 5.03223 1.33301 5.33325C1.33301 5.86468 1.46328 6.53898 1.93371 7.1035C2.43979 7.71079 3.17903 7.99992 3.99967 7.99992C4.77874 7.99992 5.38248 7.63663 5.76995 7.3123C5.90207 7.2017 6.09728 7.2017 6.2294 7.3123C6.61687 7.63663 7.22061 7.99992 7.99968 7.99992C8.77874 7.99992 9.38248 7.63663 9.76995 7.3123C9.90207 7.2017 10.0973 7.2017 10.2294 7.3123C10.6169 7.63663 11.2206 7.99992 11.9997 7.99992C12.8203 7.99992 13.5596 7.71079 14.0656 7.1035C14.5361 6.53898 14.6663 5.86468 14.6663 5.33325C14.6663 5.03223 14.5906 4.75773 14.5317 4.57715C14.466 4.37588 14.3811 4.17375 14.295 3.98795C14.1225 3.61565 13.9062 3.22601 13.7149 2.90006C13.1177 1.88249 12.0315 1.33325 10.9293 1.33325H5.07004ZM5.07004 2.66659C4.40134 2.66659 3.77284 2.99824 3.43436 3.57496C3.07093 4.1942 2.66634 4.96602 2.66634 5.33325C2.66634 5.99992 2.99967 6.66658 3.99967 6.66658C4.70082 6.66658 5.2381 6.01111 5.49661 5.61933C5.60912 5.44881 5.79539 5.33325 5.99967 5.33325C6.20396 5.33325 6.39023 5.44881 6.50274 5.61933C6.76125 6.01111 7.29853 6.66658 7.99968 6.66658C8.70082 6.66658 9.2381 6.01111 9.49661 5.61933C9.60913 5.44881 9.79539 5.33325 9.99968 5.33325C10.204 5.33325 10.3902 5.44881 10.5027 5.61933C10.7613 6.01111 11.2985 6.66658 11.9997 6.66658C12.9997 6.66658 13.333 5.99992 13.333 5.33325C13.333 4.96602 12.9284 4.1942 12.565 3.57496C12.2265 2.99824 11.598 2.66659 10.9293 2.66659H5.07004Z">
                                        </path>
                                    </svg>
                                </button>
                                <span class="cate">All Categories</span>
                                <i class="d-flex"><img src="assets/images/arrow-dropdown.svg" alt=""></i>
                            </h3>
                            <div id="under-menu" class="collapse">
                                <div class="wbhm">
                                    <nav id="megamenu" class="megamenu text-left">
                                        <div class="wr-menu">
                                            <span>
                                                <svg class="icon" viewBox="0 0 384 384">
                                                    <rect x="0" y="277.333" width="384" height="42.667"></rect>
                                                    <rect x="0" y="170.667" width="384" height="42.667"></rect>
                                                    <rect x="0" y="64" width="384" height="42.667"></rect>
                                                </svg>
                                            </span>
                                        </div>
                                        <ul id="wbmegalevel-1" class="level_1 menu-vertical">
                                            <li>
                                                <h2 class="wbmenuclose">Menu<button type="button"
                                                        class="closebtn float-right" aria-label="Menu">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            aria-hidden="true" focusable="false" role="presentation"
                                                            class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                                            <path
                                                                d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                                                fill="currentColor">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </h2>
                                            </li>
                                            <?php if (isset($categories) && is_array($categories)): ?>
                                                <?php foreach ($categories as $categoryId => $category): ?>
                                                    <li class="wbmenulink wbmenul_1 <?= !empty($category['subcategories']) ? 'wbmenusub' : '' ?>">
                                                        <div class="thumb_img">
                                                            <img src="<?= htmlspecialchars($category['icon']) ?>" alt="<?= htmlspecialchars($category['name']) ?>">
                                                            <a class="wbmenul1_link " href="#">
                                                                <?= htmlspecialchars($category['name']) ?>
                                                            </a>
                                                        </div>
                                                        <?php if (!empty($category['subcategories'])): ?>
                                                            <ul class="level_2 wbmenudropdown">
                                                                    <li class="container">
                                                                        <div class="row rless">
                                                                            <div class="col-lg-12 col-12 cless ">
                                                                                <h3><?= htmlspecialchars($category['name']) ?> <i><img src="<?= htmlspecialchars($category['icon']) ?>" alt=""></i></h3>
                                                                                <ul class="level_3">
                                                                                    <?php foreach ($category['subcategories'] as $subcategoryId => $subcategoryName): ?>
                                                                                        <li class="level_3__item">
                                                                                            <a class="level_3__link" href="#"><?= htmlspecialchars($subcategoryName) ?></a>
                                                                                        </li>
                                                                                    <?php
                                                                                endforeach; ?>
                                                                                </ul>   
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <li>No categories available.</li>
                                            <?php endif; ?>
                                        </ul>
                                        <div class="w3-overlay w3-animate-opacity" style="cursor: pointer;" id="myOverlay"></div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rightw">
                    <div id="shopify-section-cms-menu" class="shopify-section index-section">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="cms-menu">
                                    <p><a href="#" title="All collections">Top Offers</a></p>
                                    <p><a href="product-list.php" title="apple">Shop</a></p>
                                </div>
                            </div>
                            <div class="col-lg-6 justify-content-end offer-icon">
                                <p><a href="#" title="avocado">About us</a></p>
                                <p><a href="#" title="All collections">Blog</a></p>
                                <p><a href="#" title="All collections">Contact us</a></p>
                                <p><a href="#" title="All collections">FAQ</a></p>
                                <p><a href="#" title="All collections">Our Branches</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>