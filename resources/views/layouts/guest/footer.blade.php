<div class="menubar-footer footer-fixed">
    <ul class="inner-bar">
        <li class="">
            <a href="{{url('user/dashboard')}}">
                <i class="icon icon-home2"></i>
                Home
            </a>
        </li>
        <li>
            <a href="{{route('deposits.index')}}">
                <i class="icon icon-wallet text-info"></i>
                All Deposit
            </a>
        </li>
        <li>
            <a href="{{route('investment.index')}}">
                <i class="icon icon-earn text-warning"></i>
                 Investment
            </a>
        </li>
        <li>
            <a href="{{route('profile.index')}}">
                <i class="icon icon-user text-success"></i>
                Profile
            </a>
        </li>
        <li>
            <a href="{{url('user/logout')}}">
                <i class="icon icon-user text-danger"></i>
                Logout
            </a>
        </li>
    </ul>
</div>
