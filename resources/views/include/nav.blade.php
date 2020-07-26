<nav>
    <ul>
        <li class="{{ setActive('home') }}"><a href="/">@lang('Home')</a></li>
        <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="/about">@lang('About')</a></li>
        <li class="{{ request()->routeIs('portfolio') ? 'active' : '' }}"><a href="/portfolio">@lang('Portfolio')</a></li>
        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="/contact">@lang('Contact')</a></li>
    </ul>
</nav>
