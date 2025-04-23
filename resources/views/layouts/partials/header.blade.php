<header>
    <h1>HansDev</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('cursos.index') }}"
                    class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}">Courses</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('contact_us.index') }}"
                    class="{{ request()->routeIs('contact_us.index') ? 'active' : '' }}">Contact us</a></li>
        </ul>
    </nav>
</header>
