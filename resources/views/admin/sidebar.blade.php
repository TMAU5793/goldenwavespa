<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="">
            <img src="{{ url('assets/images/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.sv') }}">
                    <i class="fas fa-th"></i>
                    <span class="nav-link-text ms-1">บริการ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pmt') }}">
                    <i class="fas fa-th"></i>
                    <span class="nav-link-text ms-1">โปรโมชั่น</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-3 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">
                    <i class="fas fa-user"></i>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-link-text ms-1">Sign Out</span>
                </a>
            </li>
            
        </ul>
    </div>
    
</aside>
