<ul class="header-nav d-none d-md-flex">
    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
</ul>
<ul class="header-nav ms-auto">
</ul>
<ul class="header-nav ms-3">
    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button"
            aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com">
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end pt-0">
            <a class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('formLogout').submit();" href="{{ route('logout') }}">
                <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Logout</a>
            <form id="formLogout" action="{{ route('logout') }}" method="POST">@csrf</form>
        </div>
    </li>
</ul>
