<div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index-2.html">Intrept</a>
                </div>
                <!-- <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index-2.html">CP</a>
                </div> -->
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Posts</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{route('posts')}}">All</a></li>
                            <li><a class="nav-link" href="{{ route('posts.add')}}">Add</a></li>
                        </ul>
                    </li>

              
                    <li class="dropdown">
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-fire"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </li>
                </ul>
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <!-- <a href="https://getcodiepie.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-rocket"></i> Documentation</a> -->
                </div>
            </aside>
        </div>