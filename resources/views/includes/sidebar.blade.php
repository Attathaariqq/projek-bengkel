<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('category.get') }}">
                    <span data-feather="home"></span>
                    Category
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('product.get') }}">
                    <span data-feather="home"></span>
                    Product
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('auth.user') }}">
                    <span data-feather="home"></span>
                    Kelola User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('customer.get') }}">
                    <span data-feather="home"></span>
                    Kelola Customer
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('order.get') }}">
                    <span data-feather="home"></span>
                    Order
                </a>
            </li>
            @if(\Illuminate\Support\Facades\Auth::check())
                <li class="nav-item">
                    <form action="{{ route("auth.logout") }}" method="POST">
                        @csrf
                        <button class="btn btn-danger" aria-current="page" href="{{ route('customer.get') }}">
                            <span data-feather="home"></span>
                            Logout
                        </button>
                    </form>
                </li>
            @endif
        </ul>
    </div>
</nav>
