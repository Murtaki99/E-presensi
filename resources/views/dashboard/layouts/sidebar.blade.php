 <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion shadow" id="accordionSidebar">
     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
         <div class="eounded-circle ml-2">
             <img class="img-profile rounded-circle" width="45" height="45" src="/assets/img/logo.png">
         </div>
         <div class="sidebar-brand-text mx-3">E-Presensi</div>
     </a>
     <!-- Divider -->
     <hr class="sidebar-divider my-0">
     <!-- Nav Item - Dashboard -->
     <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="/"><i class="fas fa-fw fa-home"></i><span>Home</span></a></li>
     <!-- Divider -->
     <hr class="sidebar-divider">
     <div class="sidebar-heading">
         Menu
     </div>
     <li class="nav-item {{ Request::is('dashboard/students*') ? 'active' : '' }}">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
             aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-users"></i>
             <span>Santri</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Pilih Menu:</h6>
                 <a class="collapse-item" href="/dashboard/students">Data Santri</a>
                  <a class="collapse-item" href="/dashboard/students/create">Tambah Santri</a>
             </div>
         </div>
     </li>
     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item {{ Request::is('dashboard/scans*') ? 'active' : ''}}">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
             aria-expanded="true" aria-controls="collapseUtilities">
             <i class="fas fa-clipboard-list"></i>
             <span>Absensi</span>
         </a>
         <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Pilih Menu:</h6>
                 <a class="collapse-item" href="/dashboard/scans">Mulai</a>
                 <a class="collapse-item" href="#">Data Absensi</a>
             </div>
         </div>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider">
     <!-- Heading -->
     <div class="sidebar-heading">
         Data Master
     </div>
     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item {{ Request::is('dashboard/locals*') ? 'active' : '' }}">

         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
             aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-folder"></i>
             <span>Data Kelas</span>
         </a>
         <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Tambah Kelas:</h6>
                 <a class="collapse-item" href="/dashboard/locals">Tambah Kelas Baru</a>
                 <a class="collapse-item" href="/dashboard/mapels">Tambah Mata Pelajaran</a>

                 <a class="collapse-item" href="#"></a>
             </div>
         </div>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
