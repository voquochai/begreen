<nav class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="navbar-nav">
                    <li {!! (Route::currentRouteName() == 'frontend.home.index') ? 'class="active"' : '' !!} ><a href="{{ url('/') }}"> {{ __('site.home') }} </a></li>
                    <li {!! ($type == 'gioi-thieu') ? 'class="active"' : '' !!} ><a href="{{ url('/gioi-thieu') }}"> {{ __('site.about') }} </a></li>
                    <li class="menu_style_column mega-col-columns-4 {!! ($type == 'san-pham') ? 'active' : '' !!}" ><a href="{{ url('/san-pham') }}"> {{ __('site.product') }} </a>
                        @php
                            Menu::resetMenu();
                            Menu::setOption([
                                'open'=>['<ul class="sub-menu animated fadeIn">'],
                                'openitem'=>'<li class="menu_style_dropdown">',
                                'baseurl' => url('/san-pham')
                            ]);
                            Menu::setMenu(get_categories('san-pham',$lang));
                            echo Menu::getMenu();
                        @endphp
                    </li>
                    <li {!! ($type == 'dich-vu') ? 'class="active"' : '' !!} ><a href="{{ url('/dich-vu') }}"> {{ __('site.service') }} </a>
                        @php
                            Menu::resetMenu();
                            Menu::setOption([
                                'open'=>['<ul class="sub-menu">'],
                                'baseurl' => url('/dich-vu')
                            ]);
                            Menu::setMenu(get_categories('dich-vu',$lang));
                            echo Menu::getMenu();
                        @endphp
                    </li>
                    <li {!! ($type == 'tin-tuc') ? 'class="active"' : '' !!} ><a href="{{ url('/tin-tuc') }}"> {{ __('site.news') }} </a>
                        @php
                            Menu::resetMenu();
                            Menu::setOption([
                                'open'=>['<ul class="sub-menu">'],
                                'baseurl' => url('/tin-tuc')
                            ]);
                            Menu::setMenu(get_categories('thu-thuat',$lang));
                            echo Menu::getMenu();
                        @endphp
                    </li>
                    <li {!! (Route::currentRouteName() == 'frontend.home.contact') ? 'class="active"' : '' !!} ><a href="{{ url('/lien-he') }}"> {{ __('site.contact') }} </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="mobile-menu"></div>