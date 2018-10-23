{{-- Side Navigation --}}
<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
<div class="sidebar-wrapper">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            E-RECRUITER
        </a>
    </div>

    <ul class="nav">
        <li class="active">
            <a href="{{route('home')}}">
                <i class="pe-7s-graph"></i>
                <p>Dashboard</p>
            </a>
        </li>

        <li>
            <a href="{{route('user')}}">
                <i class="pe-7s-user"></i>
                <p>Users</p>
            </a>
        </li>
        <li>
            <a href="{{route('table')}}">
                <i class="pe-7s-note2"></i>
                <p>Players List</p>
            </a>
        </li>
            <li>
                <a href="{{route('players.index')}}">
                    <i class="pe-7s-bell"></i>
                    <p>Add Player</p>
                </a>
            </li>


    </ul>
</div>
</div>
