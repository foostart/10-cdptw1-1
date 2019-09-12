<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="css/773.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include './libs/lessc.inc.php';
        }
        $less = new lessc;
        $less->compileFile('./less/773.less', './css/773.css')
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/xxx.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-773">
            <div class="top-bar">
                <div class="hidden-desktop">
                    <div class="tb-text">
                        <a class="swift-search-link" href="#">
                            <i class="fa-search-plus"></i>
                            <span>Personal Shopper</span>
                        </a>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 clearfix">
                            <div class="tb-text clearfix">The premier destination for premium products</div>
                        </div>  
                        <div class="tb-right col-md-6 clearfix">
                            <div class="tb-text clearfix"><ul class="social-icons small light">
                                    <li class="dribbble"><a href="#" target="_blank">Dribbble</a></li>
                                    <li class="facebook"><a href="#" target="_blank">Facebook</a></li>
                                    <li class="twitter"><a href="#" target="_blank">Twitter</a></li>
                                    <li class="vimeo"><a href="#" target="_blank">Vimeo</a></li>
                                    <li class="youtube"><a href="#" target="_blank">YouTube</a></li>
                                    <li class="tumblr"><a href="#" target="_blank">Tumblr</a></li>
                                </ul>
                            </div>
                        </div>  
                    </div>  
                </div>  
            </div>  
            <div id="header-section" class="header-1">
                <header id="header" class="clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="header-left col-md-4">
                                <nav class="std-menu header-menu">
                                    <ul class="menu">
                                        <li class="tb-welcome">Welcome</li>
                                        <li class="clearfix">
                                            <a class="swift-search-link" href="#">
                                                <i class="fa-search-plus"></i>
                                                <span>Personal Shopper</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div id="logo" class="col-md-4 logo-center clearfix">
                                <a class="logo-link" href="#">
                                    <img src="images/neighborhood_logo.png" alt="Neighborhood">
                                </a>
                                <a href="#" class="hidden-desktop show-main-nav"><i class="fa-align-justify"></i></a>
                                <a href="#" class="hidden-desktop mobile-cart-link"></a>
                                <a href="#" class="hidden-desktop mobile-search-link"><i class="fa-search"></i></a>
                            </div>
                            <div class="header-right col-md-4"><nav class="std-menu header-menu">
                                    <ul class="menu">
                                        <li class="parent">
                                            <a href="#">
                                                <span>English</span>
                                            </a>
                                            <ul id="header-languages" class="sub-menu">
                                                <li>
                                                    <a href="#">DEMO - EXAMPLE PURPOSES</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>German</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="current-language">
                                                        <span>English</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>Spanish</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>French</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Login</a>
                                        </li></ul>
                                </nav>
                            </div>
                        </div>  
                    </div>  
                </header>

                <div id="main-nav">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <nav id="main-navigation" class="std-menu clearfix">

                                    <ul id="menu-main-menu" class="menu">
                                        <li>
                                            <a href="#">
                                                <span>Home</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Home (Example One)</a></li>
                                                <li><a href="#">Home (Example Two)</a></li>
                                                <li><a href="#">Home (Example Three)</a></li>
                                                <li><a href="#">Home (Example Four)</a></li>
                                                <li><a href="#">Home (Example Five)</a></li>
                                                <li><a href="#">Home (Example Six)</a></li>
                                                <li><a href="#">Home (Example Seven)</a></li>
                                                <li><a href="#">Home (Example Eight)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Shop</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Shop – with left sidebar</a></li>
                                                <li><a href="#">Shop – with right sidebar</a></li>
                                                <li><a href="#">Shop – full-width</a></li>
                                                <li><a href="#">Product Detail Page</a></li>
                                                <li><a href="#">Shopping Bag</a></li>
                                                <li><a href="#">Wishlist</a></li>
                                                <li><a href="#">Track your order</a></li>
                                                <li><a href="#">My Account</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item sf-mega-menu sf-mega-menu-natural-width" data-megamenucols="3">
                                            <a href="#">
                                                <span>Features</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="#">Features 1</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">WooCommerce 2.0+</a></li>
                                                        <li><a href="#">Super Search</a></li>
                                                        <li><a href="#">Retina-Ready</a></li>
                                                        <li><a href="#">Fully Responsive</a></li>
                                                        <li><a href="#">Parallax Elements</a></li>
                                                        <li><a href="#">Swift Page Builder</a></li>
                                                        <li><a href="#">Header Examples</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Features 2</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Boxed / Full-width</a></li>
                                                        <li><a href="#">Revolution Slider</a></li>
                                                        <li><a href="#">Stunning Swift Slider</a></li>
                                                        <li><a href="#">Font Awesome Icons</a></li>
                                                        <li><a href="#">Custom Colors</a></li>
                                                        <li><a href="#">Asset Backgrounds</a></li>
                                                        <li><a href="#">100% Translatable</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Features 3</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Demo Content Included</a></li>
                                                        <li><a href="#">Font Deck</a></li>
                                                        <li><a href="#">600+ Google Fonts</a></li>
                                                        <li><a href="#">Font Size Options</a></li>
                                                        <li><a href="#">Five Star Support</a></li>
                                                        <li><a href="#">Extensive Theme Options</a></li>
                                                        <li><a href="#/">Powerful Page Meta</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item sf-mega-menu sf-mega-menu-natural-width  no-headings parent" data-megamenucols="3">
                                            <a href="/pages/">
                                                <span>Pages</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="#">Pages 1</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">About Us</a></li>
                                                        <li><a href="#">About Us 2</a></li>
                                                        <li><a href="#">Contact</a></li>
                                                        <li><a href="#">Contact 2</a></li>
                                                        <li><a href="#">Delivery &amp; Returns</a></li>
                                                        <li><a href="#/">Help Centre / F.A.Q.</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Pages 2</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Services &amp; Capabilities</a></li>
                                                        <li><a href="#">Meet the team</a></li>
                                                        <li><a href="#">Payment</a></li>
                                                        <li><a href="#">Pricing</a></li>
                                                        <li><a href="#">Privacy</a></li>
                                                        <li><a href="#">Stores</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Pages 3</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Default Page (Sidebar Right)</a></li>
                                                        <li><a href="#">Default Page (Sidebar Left)</a></li>
                                                        <li><a href="#">Default Page (Dual Sidebars)</a></li>
                                                        <li><a href="#">Default Page (Full-width)</a></li>
                                                        <li>
                                                            <a href="#">404</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item sf-mega-menu sf-mega-menu-fw  no-headings      parent" data-megamenucols="4">
                                            <a href="#">
                                                <span>Shortcodes</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="#">Shortcodes 1</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Accordion</a></li>
                                                        <li><a href="#">Boxed Content</a></li>
                                                        <li><a href="#">Buttons</a></li>
                                                        <li><a href="#">Columns</a></li>
                                                        <li><a href="#">Dividers</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Shortcodes 2</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Dropcaps, Ampersand &amp; Highlighter</a></li>
                                                        <li><a href="#">Swift Charts &amp; Progress Bars</a></li>
                                                        <li><a href="#">Google Charts</a></li>
                                                        <li><a href="#">Google Maps</a></li>
                                                        <li><a href="#">Icons &amp; Links with icons</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Shortcodes 3</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Images, Videos &amp; Lightbox</a></li>
                                                        <li><a href="#">Lists</a></li>
                                                        <li><a href="#">Message Boxes / Alerts</a></li>
                                                        <li><a href="#">Pricing Tables</a></li>
                                                        <li><a href="#">Quotes</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Shortcodes 4</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Social Icons</a></li>
                                                        <li><a href="#">Tables</a></li>
                                                        <li><a href="#">Tabs</a></li>
                                                        <li><a href="#">Tour</a></li>
                                                        <li><a href="#">Typography</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">
                                                <span>Portfolio</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Standard Single Column</a></li>
                                                <li><a href="#">Standard 2 Column</a></li>
                                                <li><a href="#">Standard 3 Column</a></li>
                                                <li><a href="#">Standard 4 Column</a></li>
                                                <li><a href="#">Gallery 2 Column</a></li>
                                                <li><a href="#">Gallery 3 Column</a></li>
                                                <li><a href="#">Gallery 4 Column</a></li>
                                                <li><a href="#">Page Builder Portfolio Item 1</a></li>
                                                <li><a href="#">Page Builder Portfolio Item 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">
                                                <span>Blog</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Standard with no sidebars</a></li>
                                                <li><a href="#">Standard with right sidebar</a></li>
                                                <li><a href="#">Standard with left sidebar</a></li>
                                                <li><a href="#">Standard with both sidebars</a></li>
                                                <li><a href="#">Mini with right sidebar</a></li>
                                                <li><a href="#">Mini with left sidebar</a></li>
                                                <li><a href="#">Mini with Both Sidebars</a></li>
                                                <li><a href="#">Mini with no sidebars</a></li>
                                                <li><a href="#">Masonry with no sidebars</a></li>
                                                <li><a href="#">Masonry with right sidebar</a></li>
                                                <li><a href="#">Masonry with left sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>What’s New</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-3 header-right">
                                <nav class="std-menu">
                                    <ul class="menu">
                                        <li class="menu-search parent">
                                            <a href="#">
                                                <i class="fa-search"></i>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <form method="get" action="#">
                                                        <input type="text" placeholder="Search" name="s" autocomplete="off">
                                                    </form>

                                                </li>
                                            </ul>
                                        </li>

                                        <li class="parent">
                                            <a href="#" title="View your shopping bag">
                                                <i class="fa-cart"></i>
                                                <span>£0.00</span>
                                            </a>   
                                        </li>
                                        <li class="parent">
                                            <a href="#" title="View your wishlist">
                                                <i class="fa-star"></i>
                                                <span>0</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <div class="wishlist-bag">
                                                        <div class="bag-header">My wishlist on Neighborhood</div>
                                                        <div class="wishlist-empty">Your wishlist is currently empty.</div>    
                                                        <div class="bag-buttons">
                                                            <a class="sf-roll-button" href="#">
                                                                <span>Go to your wishlist</span>
                                                                <span>Go to your wishlist</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>