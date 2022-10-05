
<style>
    li{ cursor: pointer; }
</style>
  
<aside class="main-sidebar elevation-6" style="background-color: #003366; color: white">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
    {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" --}} 
            {{-- style="opacity: .8"> --}}
            <center><img src="{{ url('images/logo.png') }}" alt="I-REMIT" class="img-fluid" width="40%"></center>
    </a>
    <link href='https://css.gg/arrows-exchange.css' rel='stylesheet'>
    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
        <center><table>
            <tr>
            <td style="padding: 0px 10px;"><i style="color: white;" class="fa fa-user-friends"></i>&nbsp;&nbsp;<a disabled href="#"  style="font-family: Calibri; font-size: 20px;" id="user_resize">SAMPLE USER ID</a></td>
            <td onclick=""><a style="font-size: 10px" class="gg-arrows-exchange" title="Switch Agent"></a></td>            
            </tr>      
        </table></center>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        {{-- GEMERATE SIDEBAR --}}
            <li class="nav-header">Main Menu</li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class=""></i>
                    <p>Menu Item</p>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class=""></i>
                <p>
                    winDesc
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                
                <li class="nav-item">
                    <a href="#" class="nav-link"> 
                    <i class=""></i>
                    <p>
                        Window Desc With Child
                        <span class="badge badge-info right">22</span>
                    </p>
                    </a>
                </li>
                </ul>
            </li>

        <li onclick="$('#remit-status-inquiry-modal').modal('show')"  class="nav-item">
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