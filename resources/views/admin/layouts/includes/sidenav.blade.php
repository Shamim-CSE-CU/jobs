<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: rgb(44 31 31);">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        

        <iconify-icon icon="arcticons:jobstreet" style="padding-left:17px; text-align:center; align-items:center; font-size:38px; color:hsl(122deg 75.46% 55.07%);"></iconify-icon>
            
            <h6 class="logo_name" style="color: rgb(48 102 37); font-size:17px; font-weight:1000;" >HALAL</h6>
            <h6 class="logo_name" style="color: rgb(143 114 114); font-size:21px; font-weight:1000" >WORKS</h6>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if ($page == 'Admin') active @endif">
        <a class="nav-link" href="{{ route('admin.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Admin</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Type: 
    </div>


    <!-- Nav Item - Tables -->
    <li class="nav-item @if ($page == 'Category') active @endif">
        <a class="nav-link" href="{{ route('category.index')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Category</span></a>
    </li>
    <li class="nav-item @if ($page == 'Upload') active @endif">
        <a class="nav-link" href="{{ route('post.index')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Upload_Service</span></a>
    </li>
    <li class="nav-item @if ($page == 'Upload') active @endif">
        <a class="nav-link" href="{{ route('post.index')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Upload_Project</span></a>
    </li>
    

    
    <!-- Heading -->
    <div class="sidebar-heading">
        Other:
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>More</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="">Login</a>
                <a class="collapse-item" href="">Register</a>
                <a class="collapse-item" href="">Setting</a>
                
            </div>
        </div>
    </li>
</ul>


