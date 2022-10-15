
<style>
    li{ cursor: pointer; }
</style>
  
<aside class="main-sidebar elevation-6" style="background-color: #003366; color: white">
    <!-- Brand Logo -->
    <span  class="brand-link">
    {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" --}} 
            {{-- style="opacity: .8"> --}}
            <center><img src="{{ url('images/logo.png') }}" alt="I-REMIT" class="img-fluid" width="40%"></center>
    </span>
    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="image"></div>
        <strong class="info p-0"><i class="fa-user"></i> USERNAME</strong>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        {{-- GEMERATE SIDEBAR --}}
            <li class="nav-header">Main Menu</li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="fa-user"></i>
                    <p>Menu Item</p>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fa-user"></i>
                <p>
                    winDesc
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                
                <li class="nav-item">
                    <a href="#" class="nav-link"> 
                    <i class="fa-user"></i>
                    <p>
                        Window Desc With Child
                        <span class="badge badge-info right"></span>
                    </p>
                    </a>
                </li>
                </ul>
            </li>

        <li class="nav-item">
            <a class="nav-link">
            <i class="nav-icon fa fa-search"></i>
            <p>
                Remit Status Inquiry
            </p>
            </a>
        </li>
        {{-- END OF REPORTS --}}


        <li class="nav-header">Maintenance</li>
        <li class="nav-item">
            <a href="#" onclick="maintenanceAlert()" class="nav-link {{ (Route::current()->getName() == 'grade.index' ? 'active' : '') }}">
            <i class="nav-icon fas fa-file"></i>
            <p>
                Password Settings
            </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" onclick="maintenanceAlert()" class="nav-link {{ (Route::current()->getName() == 'grade.index' ? 'active' : '') }}">
            <i class="nav-icon fas fa-file"></i>
            <p>
                Event Promo
            </p>
            </a>
        </li>


        <li class="nav-item">
            <a href="#" onclick="maintenanceAlert()"  class="nav-link {{ (Route::current()->getName() == 'grade.index' ? 'active' : '') }}">
            <i class="nav-icon fas fa-file"></i>
            <p>
                Uploading
            </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="" id= "logoutBtn" class="nav-link" onclick="">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
                Log Out
            </p>
            </a>

            <form id="logout-form" action="" method="POST" style="display: none;"> 
                @csrf
            </form>
        </li>

        </ul>   

    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>