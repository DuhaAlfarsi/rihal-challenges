<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ route('home') }}">
        <i class=""></i>Home
    </a>
</li>
<!-- Stusnets -->
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ url('students/create') }}">
        <i class=""></i>Add Students
    </a>
</li> 

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ url('students/index') }}">
        <i class=""></i>Edit & Delete Students
    </a>
</li> 
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ url('students/show') }}">
        <i class=""></i>Show All Students
    </a>
</li> 
<!-- Section -->
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ url('sections/create') }}">
        <i class=""></i>Add Class
    </a>
</li> 

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ url('sections/show') }}">
        <i class=""></i>Edit & Delete Classes
    </a>
</li> 


<!-- Country -->
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ url('countries/create') }}">
        <i class=""></i>Add Country
    </a>
</li> 

<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ url('countries/show') }}">
        <i class=""></i>Edit & Delete Country
    </a>
</li> 
<a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="c-icon mfe-2 cil-account-logout"></i>Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
