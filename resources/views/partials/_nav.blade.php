<!-- Static navbar -->
<nav class="navbar navbar-default" style="margin-top: -6px;">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Laravel Blog</a>
        </div>

        <div id="bs-example-navbar-collapse-1" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
                <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
                <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
                <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Hello {{ Auth::user()->name }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('posts.index') }}">Posts</a></li>
                            <li><a href="{{ route('categories.index') }}">Categories</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->

    </div><!--/.container-fluid -->
</nav>