<!-- header actions have disabled classes -->
<header class="header">
        <div class="wrap">
            <a href="/" class="logo">
                <img src="{{ URL::asset('img/logo.jpg') }}" width="50" alt="Fashion/Style" />
            </a>
            <ul class="main-nav">
                <li>
                    <a href="javascript:;">Women</a>
                    <div class="nav-submenu">
                        <div class="wrap">
                            <a class="nav-submenu-item" href="javascript:;">
                                Tee-shirt
                            </a>
                            <a class="nav-submenu-item" href="javascript:;">
                                Sweat-shirt
                            </a>
                            <a class="nav-submenu-item" href="javascript:;">
                                Jogging
                            </a>
                            <a class="nav-submenu-item" href="javascript:;">
                                Jacket
                            </a>
                            <a class="nav-submenu-item" href="javascript:;">
                                Accessories
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="javascript:;">Men</a>
                </li>
                <li>
                    <a href="javascript:;">Kids</a>
                </li>
            </ul>
            <div class="header-actions">
                <ul>
                    <li class="professionals">
                        <a href="javascript:;">
                            For professionals
                        </a>
                    </li>
                    <li class="subnav-desktop">
                        <a href="javascript:;" class="js-subnav-toggle">
                            ...
                        </a>
                    </li>
                    <li class="search-link">
                        <a href="javascript:;" class="js-search-toggle">
                            <i class="icon font-ico-search"></i>
                        </a>
                        <div class="header-search">
                            <div class="wrap">
                                <form action="" method="post">
                                    <div class="search-form">
                                        <input type="text" name="search-form" />
                                        <button class="btn btn-black btn-big" type="submit">Search</button>
                                    </div>
                                </form>
                                <div class="search-suggestions block">
                                    <h6><i class="icon font-ico-arrow-right"></i> Suggestions</h6>
                                    <ul>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="assets/img/content/suggestion-01.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="assets/img/content/suggestion-02.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="assets/img/content/suggestion-03.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="assets/img/content/suggestion-04.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="assets/img/content/suggestion-05.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="assets/img/content/suggestion-06.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="basket-link">
                        <a href="javascript:;" class="disabled js-basket-subnav-toggle">
                            <i class="icon font-ico-basket"></i>
                        </a>
                        <div class="basket-subnav header-subnav">
                            <a href="/" class="logo">
                                <img src="assets/img/logo.png" width="162" alt="Fashion/Style">
                            </a>
                            <span class="close-subnav js-close-subnav"><i class="icon font-ico-close"></i></span>
                            <h3>My bag</h3>
                            <div class="basket-item">
                                <div class="basket-thumbnail">
                                    <a href="javascript:;">
                                        <img src="assets/img/content/bag-item1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="basket-description">
                                    <h6>
                                        <a href="javascript:;">Jacket XYZ</a>
                                        <a class="remove-product" href="javascript:;"><i class="icon font-ico-recycle-bin"></i></a>
                                    </h6>
                                    <span class="price">65,<sup>00 €</sup></span>
                                    <div class="variations">
                                        <span class="select-size">M</span>
                                        <span class="separator"> - </span>
                                        <span class="color">Grey</span>
                                        <span class="separator"> - </span>
                                        <span class="quantity"></span>1</span>
                                    </div>
                                </div>
                            </div>
                            <div class="basket-item">
                                <div class="basket-thumbnail">
                                    <a href="javascript:;">
                                        <img src="assets/img/content/bag-item1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="basket-description">
                                    <h6>
                                        <a href="javascript:;">Jacket XYZ</a>
                                        <a class="remove-product" href="javascript:;"><i class="icon font-ico-recycle-bin"></i></a>
                                    </h6>
                                    <span class="price">65,<sup>00 €</sup></span>
                                    <div class="variations">
                                        <span class="select-size">M</span>
                                        <span class="separator"> - </span>
                                        <span class="color">Black</span>
                                        <span class="separator"> - </span>
                                        <span class="quantity"></span>1</span>
                                    </div>
                                </div>
                            </div>
                            <div class="basket-prices block">
                                <span class="price-label">Total</span>
                                <span class="price">130,<sup>00 €</sup></span>
                            </div>
                            <a class="btn btn-black btn-big" href="javascript:;">See shoping bag</a>
                        </div>
                    </li>
                    <li class="profile-link">
                        <a href="javascript:;" class="disabled js-login-subnav-toggle">
                            <i class="icon font-ico-profile"></i>
                        </a>
                        <div class="login-subnav header-subnav">
                            <span class="close-subnav js-close-subnav"><i class="icon font-ico-close"></i></span>
                            <div class="login-form-wrap">
                                <h3>Log in</h3>
                                <h6>Manage your orders, newsletter are like saving shipping address...</h6>
                                <div class="login-form clearfix">
                                    <h6>Don't have an account?</h6>
                                    <a class="btn btn-big create-account-btn" href="javascript:;">Create an account</a>
                                    <h6>Log in</h6>
                                    <div class="form-item form-item-full">
                                        <input class="form-item-text" type="text" name="" placeholder="E-mail address">
                                    </div>
                                    <div class="form-item form-item-full">
                                        <input class="form-item-text" type="password" name="" placeholder="Password">
                                    </div>
                                    <a class="forgot-password" href="javascript:;">Forgot your password?</a>
                                    <a class="btn btn-black btn-big login-btn" href="javascript:;">Log in</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="currency-language">
                        <a href="javascript:;" class="cl-toggle js-cl-toggle">
                            <span class="c-label">€</span><span class="l-label">FR</span>
                        </a>
                        <div class="cl-dropdown">
                            <div class="c-dropdown">
                                <label for="currency">choose currency</label>
                                <select name="" id="currency" class="c-dropdown">
                                    <option value="">€ EUR</option>
                                    <option value="">£ Pound</option>
                                </select>
                            </div>
                            <div class="l-dropdown">
                                <label for="language">choose language</label>
                                <div class="select-list">
                                    <span class="selected"><img src="assets/svg/ico-flag-uk.svg" alt="English flag">English</span>
                                    <div class="dest-dropdown js-dest-overlay">
                                        <ul>
                                            <li><span class="primary"><img src="assets/svg/ico-flag-uk.svg" alt="English flag">English</span></li>
                                            <li><span class="primary"><img src="assets/svg/ico-flag-belgium.svg" alt="Belgium flag">Belgium</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-toggle-wrap">
                        <a class="menu-toggle js-subnav-toggle" href="javascript:;">
                            <span class="hamburger"></span>
                        </a>
                        <div class="subnav header-subnav">
                            <div class="subnav-links">
                                <ul>
                                    <li>
                                        <a href="javascript:;">About us</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Edito</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Events</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Collabs</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Store</a>
                                    </li>
                                    <li>
                                        <a href="javascfript:;">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="javascfript:;">Contact</a>
                                    </li>
                                    <li>
                                        <a href="javascfript:;">Professionals</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mobile-nav">
                <div class="mobile-nav-products">
                    <a href="javascript:;">
                        <span class="text">Men</span>
                    </a>
                    <a href="javascript:;">
                        <span class="text">Women</span>
                    </a>
                    <a href="javascript:;">
                        <span class="text">Kids</span>
                    </a>
                </div>
                <div class="links-list">
                    <form action="" method="post">
                        <div class="search-form">
                            <input type="text" name="search-form" placeholder="Your search">
                            <button class="btn" type="submit"></button>
                        </div>
                    </form>
                    <ul>
                        <li>
                            <a href="javascript:;">for professionals</a>
                        </li>
                        <li>
                            <a href="javascript:;">About us</a>
                        </li>
                        <li>
                            <a href="javascript:;">edito</a>
                        </li>
                        <li>
                            <a href="javascript:;">events</a>
                        </li>
                        <li>
                            <a href="javascript:;">collabs</a>
                        </li>
                        <li>
                            <a href="javascript:;">store</a>
                        </li>
                        <li>
                            <a href="javascript:;">jobs</a>
                        </li>
                        <li>
                            <a href="javascript:;">contact</a>
                        </li>
                    </ul>
                    <div class="currency-language">
                        <div class="c-dropdown">
                            <label for="currency">choose currency</label>
                            <select name="" id="currency" class="c-dropdown">
                                <option value="">€ EUR</option>
                                <option value="">£ Pound</option>
                            </select>
                        </div>
                        <div class="l-dropdown">
                            <label for="language">choose language</label>
                            <div class="select-list">
                                <span class="selected"><img src="assets/svg/ico-flag-uk.svg" alt="English flag">English</span>
                                <div class="dest-dropdown js-dest-overlay">
                                    <ul>
                                        <li><span class="primary"><img src="assets/svg/ico-flag-uk.svg" alt="English flag">English</span></li>
                                        <li><span class="primary"><img src="assets/svg/ico-flag-belgium.svg" alt="Belgium flag">Belgium</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>