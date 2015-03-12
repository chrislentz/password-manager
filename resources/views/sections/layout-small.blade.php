<!DOCTYPE html>
<html>
<head>
    <title>Password Manager</title>

    {!! HTML::style('assets/css/all.min.css') !!}
</head>
<body class="small">
    <div class="large-4 large-centered columns text-center">
        <h1>Password Manager</h1>
    </div>

    <div class="content-container large-4 large-centered columns text-center">

        @yield('content')

    </div>

    <footer>
        <div class="row">
            <div class="large-4 large-centered columns text-center">
                <small>Password Manager on <a href="https://github.com/chrislentz/password-manager">Github</a>.</small>
            </div>
        </div>
    </footer>

    {!! HTML::script('assets/js/all.min.js') !!}

    @yield('page-js')
</body>
</html>