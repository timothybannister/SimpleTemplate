<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">DEMO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item <?=!\App\Core\Router::isActive() ?: 'active' ?>">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item <?=!\App\Core\Router::isActive('users') ?: 'active'  ?>">
                <a class="nav-link" href="/users">Users</a>
            </li>
            <li class="nav-item <?=!\App\Core\Router::isActive('about') ?: 'active'  ?>">
                <a class="nav-link" href="/about">About</a>
            </li>
        </ul>
    </div>
</nav>
