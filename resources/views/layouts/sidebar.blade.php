<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level"> {{ Auth::user()->nip }}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">

                <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item {{ Request::is('lembur', 'kasbon') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#lembur">
                        <i class="fas fa-money-check-alt"></i>
                        <p>FORM</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Request::is('lembur' , 'kasbon') ? 'show' : '' }}" id="lembur">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::is('lembur') ? 'active' : '' }}">
                                <a href="{{ url('lembur') }}">
                                    <span class="sub-item">Lembur</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('kasbon') ? 'active' : '' }}">
                                <a href="{{ url('kasbon') }}">
                                    <span class="sub-item">Kasbon</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
             
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->