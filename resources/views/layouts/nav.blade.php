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
                                <form action="{{ route('search') }}" method="GET">
                                    <div class="search-form">
                                        <input type="text" name="query" id="query" value="{{ request()->input('query') }}" />
                                        <button class="btn btn-black btn-big" type="submit">Search</button>
                                    </div>
                                </form>
                                <div class="search-suggestions block">
                                    <h6><i class="icon font-ico-arrow-right"></i> Suggestions</h6>
                                    <ul>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="{{ URL::asset('img/content/suggestion-01.jpg') }}" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="{{ URL::asset('img/content/suggestion-02.jpg') }}" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="{{ URL::asset('img/content/suggestion-03.jpg') }}" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="{{ URL::asset('img/content/suggestion-04.jpg') }}" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="{{ URL::asset('img/content/suggestion-05.jpg') }}" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="{{ URL::asset('img/content/suggestion-06.jpg') }}" alt="" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="basket-link">
                        <a href="javascript:;" class="js-basket-subnav-toggle">
                            <i class="icon font-ico-basket"></i>
                            <span class="basket-items">{{Cart::count()}}</span>
                        </a>
                        <div class="basket-subnav header-subnav">
                            <a href="/" class="logo">
                                <img src="{{ URL::asset('img/logo.jpg') }}" width="60" alt="Fashion/Style"/>
                            </a>
                            <span class="close-subnav js-close-subnav"><i class="icon font-ico-close"></i></span>

                            
                                    <div class="logged-in-user" style="font-size: 15px;">
                                        <label for="user"></label>
                                        @auth
                                        <h4>Your current bag, {{ Auth::user()->customer->firstname }}</h4> 
                                        @endauth
                                        @guest
                                        <h4>Your current bag, guest</h4> 
                                        @endguest
                                    </div>
                                    {{-- start placing products dynamically here --}}
                                    @if (Cart::count() == 0)
                                        <h6>You have no items in bag</h6>
                                    @else
                                    @foreach (Cart::content() as $item)
                                        <div class="basket-item">
                                            <div class="basket-thumbnail">
                                                <a href="javascript:;">
                                                    <img src="{{URL::asset('img/content/products/'.$item->model->image_front.'.jpg')}}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="basket-description">
                                                <h6>
                                                    <a href="/product/{{$item->model->id}}">{{$item->name}}</a>
                                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit"><i class="icon font-ico-recycle-bin"></i></button>
                                                    </form>
                                                </h6>
                                                <span class="price">{{$item->price}}€</span>
                                                <div class="variations">
                                                    <span class="select-size">{{$item->model->size}}</span>
                                                    <span class="separator"> - </span>
                                                    <span class="color">{{$item->model->color}}</span>
                                                    <span class="separator"> - </span>
                                                    <span class="quantity"></span>{{$item->qty}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                        <div class="basket-prices block">
                                            <span class="price-label">Total</span>
                                            <span class="price">{{ Cart::subtotal() }}€</span>
                                        </div>
                                        <a class="btn btn-black btn-big" href="/checkout-page-mybag">See shoping bag</a>
                                
                                    @endif
                            
                        </div>
                    </li>
                    <li class="profile-link">
                        <a href="javascript:;" class="js-login-subnav-toggle">
                            <i class="icon font-ico-profile"></i>
                        </a>
                        <div class="login-subnav header-subnav">
                            <span class="close-subnav js-close-subnav"><i class="icon font-ico-close"></i></span>
                            <div class="login-form-wrap">
                                @if (Auth::check())
                                    <div class="logged-in-user" style="font-size: 15px;">
                                        <label for="user"></label>
                                        <h3>Welcome back {{ Auth::user()->customer->firstname }}</h3>
                                        <a class="btn btn-black btn-big login-btn" href="/logout">Log out</a>
                                    </div>
                                @else
                                <h3>Log in</h3>
                                <h6>Manage your orders, newsletter are like saving shipping address...</h6>
                                <div class="login-form clearfix">
                                    <h6>Don't have an account?</h6>
                                    <a class="btn btn-big create-account-btn" href="/create-account">Create an account</a>
                                    
                                    <h6>Log in</h6>
                                    <form action="/login" method="POST">
                                        {{ csrf_field() }}
                                    <div class="form-item form-item-full">
                                        <input class="form-item-text" type="email" name="email" id="email" placeholder="E-mail address">
                                    </div>
                                    <div class="form-item form-item-full">
                                        <input class="form-item-text" type="password" name="password" id="password" placeholder="Password">
                                    </div>
                                    <a class="forgot-password" href="javascript:;">Forgot your password?</a>
                                    <button type="submit" class="btn btn-black btn-big login-btn">Log in</button>
                                    </form>
                                </div>
                                @endif
                                
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
                                    <span class="selected"><img src="{{ URL::asset('/svg/ico-flag-uk.svg') }}" alt="English flag">English</span>
                                    <div class="dest-dropdown js-dest-overlay">
                                        <ul>
                                            <li><span class="primary"><img src="{{ URL::asset('/svg/ico-flag-uk.svg') }}" alt="English flag">English</span></li>
                                            <li><span class="primary"><img src="{{ URL::asset('/svg/ico-flag-belgium.svg') }}" alt="Belgium flag">Belgium</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="user-info">
                            @if (Auth::check())
                            <div class="logged-in-user" style="font-size: 15px;">
                                <label for="user"></label>
                                <a href="/logout"><span class="user-info" style="font-size: 14px;">{{ Auth::user()->customer->firstname }}</span>
                                </a>
        
                            </div>
                            @endif

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
                    <form action="{{ route('search') }}" method="GET">
                        {{ csrf_field() }}
                        <div class="search-form">
                            <input type="text" name="query" id="query" placeholder="Your search">
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
                                <span class="selected"><img src="{{ URL::asset('/svg/ico-flag-uk.svg') }}" alt="English flag">English</span>
                                <div class="dest-dropdown js-dest-overlay">
                                    <ul>
                                        <li><span class="primary"><img src="{{ URL::asset('/svg/ico-flag-uk.svg') }}" alt="English flag">English</span></li>
                                        <li><span class="primary"><img src="{{ URL::asset('/svg/ico-flag-belgium.svg') }}" alt="Belgium flag">Belgium</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>