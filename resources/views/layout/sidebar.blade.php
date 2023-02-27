<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="">
                    <h2 class="brand-text">FPT-APTECH</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Quản lý &amp; xắp sếp</span><i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Sinh viên</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('listStudents')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Danh sách sinh viên</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('createStudents')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Thêm sinh viên</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
