<ul class="scrollable">
    <!-- BEGIN: First Child -->
    <li class="side-menu__divider">
        START MENU
    </li>
    <li>
        <a href="{{route('dashboard.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="home" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Dashboard</div>
        </a>

        <a href="{{route('roles.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="user" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Roles</div>
        </a>

        <a href="{{route('dashboard.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="users" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">All Clients</div>
        </a>

        <a href="{{route('dashboard.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="cloud" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Payment Method</div>
        </a>
    </li>
</ul>
