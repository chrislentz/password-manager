<!DOCTYPE html>
<html>
<head>
    <title>Password Manager</title>

    {!! HTML::style('assets/css/all.min.css') !!}
</head>
<body>
    <div class="page-container">

        <div class="contain-to-grid nav-margin">
            <nav class="top-bar" data-topbar role="navigation">
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="#">Password Manager</a></h1>
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>
                <section class="top-bar-section">
                    <ul class="right">
                        <li{!! ($page == 'home') ? ' class="active"' : '' !!}><a href="/">Home</a></li>
                        <li{!! ($page == 'passwords') ? ' class="active"' : '' !!}><a href="/passwords/">Passwords</a></li>
                        <li{!! ($page == 'clients') ? ' class="active"' : '' !!}><a href="/clients/">Clients</a></li>
                        <li{!! ($page == 'users') ? ' class="active"' : '' !!}><a href="/users/">Users</a></li>
                        <li><a href="/sign-out/">Sign Out</a></li>
                    </ul>
                </section>
            </nav>
        </div>

        @yield('content')

    </div>

    <footer>
        <div class="row">
            <div class="large-12 columns text-center">
                <small>Made with <i class="fa fa-heart"></i> in Atlanta, GA.</small>
            </div>
        </div>
    </footer>

    {!! HTML::script('assets/js/all.min.js') !!}

    @yield('page-js')
</body>
</html>