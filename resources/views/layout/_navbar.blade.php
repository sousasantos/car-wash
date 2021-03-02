<nav
    class="navbar navbar-light navbar-expand-md bg-white shadow-sm">
    <div
        class="container">
        <h1
            class="navbar-brand">
            <a
                href="{{ route('homepage') }}"
                class="text-reset text-decoration-none">DJ Valeting</a>
        </h1>
        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbar-menu" 
            aria-controls="navbar-menu" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div 
            class="collapse navbar-collapse justify-content-end"
            id="navbar-menu">
            <div 
                class="navbar-nav">
                @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button
                            type="submit"
                            class="btn btn-secondary ">Logout</button>
                    </form>
                @else
                    <a 
                    class="btn btn-secondary " 
                    aria-current="page" 
                    href="{{ route('login') }}">Login</a>
                @endauth
                
            </div>
        </div>
    </div>
</nav>