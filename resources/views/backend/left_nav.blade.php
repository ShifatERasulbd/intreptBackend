@php
    $siteSetting = \App\Models\SiteSetting::first();
@endphp

<div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="{{ url('/admin') }}">
                        @if($siteSetting && $siteSetting->logo)
                             <img src="{{ asset($siteSetting->logo) }}" alt="Site Logo" class="h-10 w-auto">
                        @else
                            {{-- Default Breeze SVG Logo --}}
                             <svg ...> ... </svg>
                        @endif</a>
                </div>
                <!-- <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index-2.html">CP</a>
                </div> -->
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li><a href="{{ url('/admin') }}"><i class="fa-solid fa-fire"></i><span>Dashboard</span></a></li>
                    <li><a href="{{ route('settings') }}"><i class="fa-solid fa-fire"></i><span>Site Settings</span></a></li>  
                     <li><a href="/laravel-filemanager?type=Images" target="_blank"><i class="fa-solid fa-fire"></i>Media</a></li> 
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Posts</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{route('posts')}}">All Post</a></li>
                            <li><a class="nav-link" href="{{ route('posts.add')}}">Add Post</a></li>
                        </ul>
                    </li>

                     <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Category</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{route('category')}}">All Category</a></li>
                            <li><a class="nav-link" href="{{ route('category.add')}}">Add Category</a></li>
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