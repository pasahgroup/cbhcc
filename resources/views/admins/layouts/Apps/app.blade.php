
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Asset Management System</title>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Summernote -->
  <link rel="stylesheet" href="../../../../plugins/summernote/summernote-bs4.min.css">
  <!-- Custom styles -->
  <link rel="stylesheet" href="../../../css/bayanno.css">
  <link href="../user/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/style.css">

  <style>
    /* Sidebar styles */
    .main-sidebar .nav-link {
      font-size: 16px;
      font-weight: 500;
      padding: 10px 15px;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s ease;
    }
    .main-sidebar .nav-link:hover {
      background-color: #1e282c;
      color: #ffffff;
    }
    .main-sidebar .nav-icon {
      font-size: 18px;
    }
    .main-sidebar .nav-treeview .nav-link {
      padding-left: 30px;
    }
    .main-sidebar .brand-link {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 18px;
      font-weight: bold;
    }
    .brand-link img {
      width: 40px;
      height: 40px;
    }
    .nav-item .nav-treeview i.nav-icon {
      color: #adb5bd;
    }

    /* Active state */
    .main-sidebar .nav-item > .nav-link.active {
      background-color: #007bff;
      color: #fff;
    }

    /* Navbar styles */
    .main-header.navbar {
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .main-header .nav-link {
      font-weight: 500;
      transition: color 0.3s;
    }
    .main-header .nav-link:hover {
      color: #007bff;
    }
    .navbar-nav .dropdown-menu {
      width: 300px;
    }

    /* Dark/Light mode styles */
    .dark-mode {
      background-color: #121212;
      color: #ffffff;
    }
    .light-mode {
      background-color: #f4f6f9;
      color: #000000;
    }

    /* Notification Icon size */
    .nav-link i.far.fa-comments {
      font-size: 22px;
    }

    /* Admin profile image */
    .user-panel .image img {
      border-radius: 50%;
      width: 35px;
      height: 35px;
    }

  /* Legendary Sidebar Gradient & Style */
  .main-sidebar {
    background: linear-gradient(160deg, #4f46e5 0%, #06b6d4 100%) !important;
    color: #fff !important;
    min-height: 100vh;
    border-top-right-radius: 2rem;
    border-bottom-right-radius: 2rem;
    box-shadow: 0 6px 24px rgba(6, 182, 212, 0.18);
  }
  .brand-link {
    background: transparent !important;
    border-bottom: 0;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
  }
  .brand-link .brand-image {
    box-shadow: 0 2px 8px rgba(6, 182, 212, 0.10);
    border-radius: 50%;
    background: #fff;
    padding: 3px;
  }
  .brand-link .brand-text {
    color: #fff !important;
    font-weight: 700;
    font-size: 1.35rem;
    letter-spacing: 0.06em;
  }
  .sidebar .nav-link {
    color: #e0e7ff !important;
    font-weight: 500;
    border-radius: 2rem;
    margin: 0.25rem 0.5rem;
    transition: background 0.18s, color 0.18s, box-shadow 0.18s;
    padding: 0.7rem 1.1rem;
    display: flex;
    align-items: center;
    gap: 0.7rem;
  }
  .sidebar .nav-link .nav-icon {
    font-size: 1.2rem;
    color: #a5b4fc !important;
    transition: color 0.18s;
  }
  .sidebar .nav-link.active,
  .sidebar .nav-link:hover {
    background: rgba(255,255,255,0.12) !important;
    color: #fff !important;
    box-shadow: 0 2px 10px rgba(6,182,212,0.08);
  }
  .sidebar .nav-link.active .nav-icon,
  .sidebar .nav-link:hover .nav-icon {
    color: #fff !important;
  }
  .sidebar .nav-treeview {
    background: none !important;
  }
  .sidebar .nav-treeview .nav-link {
    color: #b3c1f7 !important;
    font-weight: 400;
    border-radius: 1.2rem;
    padding-left: 2.6rem;
  }
  .sidebar .nav-treeview .nav-link.active,
  .sidebar .nav-treeview .nav-link:hover {
    background: rgba(255,255,255,0.12) !important;
    color: #fff !important;
  }
  .sidebar hr {
    border-top: 1px solid #3b82f6;
    margin: 0.7rem 0;
  }
  ::-webkit-scrollbar-thumb {
    background: #4f46e5;
    border-radius: 10px;
  }

  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button" title="Toggle Sidebar">
        <i class="fas fa-bars" style="font-size: 20px;"></i>
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="/" class="nav-link">
        <i class="fas fa-globe mr-1"></i> View Website
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">
        <i class="fas fa-envelope mr-1"></i> Contact
      </a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto align-items-center">

    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link position-relative" data-toggle="dropdown" href="#" title="Messages" aria-haspopup="true" aria-expanded="false" style="font-size: 20px;">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge" style="position: absolute; top: 6px; right: 6px; font-size: 0.7rem; min-width: 18px; height: 18px; line-height: 18px; border-radius: 50%;">
          12
        </span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right shadow-lg" style="min-width: 320px;">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="{{ URL::asset('/storage/user/'.auth()->user()->photo) ?? '/dist/img/default-avatar.png' }}" alt="Avatar" class="img-size-50 mr-3 img-circle" style="object-fit: cover;">
            <div class="media-body">
              <h3 class="dropdown-item-title mb-1">
                {{ auth()->check() ? auth()->user()->name : 'Guest' }}
                <span class="float-right text-sm text-danger"><i class="fas fa-circle"></i></span>
              </h3>
              <p class="text-sm mb-0">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer text-center font-weight-bold text-primary">See All Messages</a>
      </div>
    </li>

    <!-- User Dropdown Menu -->
    <li class="nav-item dropdown ml-3">
      <a class="nav-link d-flex align-items-center" data-toggle="dropdown" href="#" title="User Menu" aria-haspopup="true" aria-expanded="false" style="padding: 0 8px;">
        <img src="{{ URL::asset('/storage/user/'.auth()->user()->photo) ?? '/dist/img/default-avatar.png' }}" class="img-circle elevation-2" alt="User Image" style="width:36px; height:36px; object-fit: cover; border: 2px solid #4f46e5; box-shadow: 0 2px 8px rgba(79,70,229,0.25);">
        <span class="d-none d-lg-inline-block ml-2 font-weight-bold text-dark" style="font-size: 1rem;">
          {{ auth()->check() ? auth()->user()->name : 'Guest' }}
        </span>
        <i class="fas fa-angle-down ml-1 text-secondary"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right shadow-lg" style="min-width: 280px;">
        <a href="#" class="dropdown-item d-flex align-items-center">
          <img src="{{ URL::asset('/storage/user/'.auth()->user()->photo) ?? '/dist/img/default-avatar.png' }}" alt="Profile" class="img-size-50 mr-3 img-circle" style="object-fit: cover;">
          <div>
            <h3 class="dropdown-item-title mb-1">{{ auth()->check() ? auth()->user()->name : 'Guest' }}</h3>
            <p class="text-sm mb-0">{{ auth()->user()->email }}</p>
            <small class="text-muted"><i class="far fa-user mr-1"></i> {{ auth()->user()->role }}</small>
          </div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="/logout" class="dropdown-item dropdown-footer text-danger font-weight-bold d-flex align-items-center justify-content-center">
          <i class="fas fa-power-off mr-2"></i> Logout
        </a>
      </div>
    </li>

    <!-- Theme Toggle -->
    <li class="nav-item ml-3">
      <a class="nav-link" id="theme-toggle" href="#" style="font-size: 22px;" title="Toggle Dark/Light Mode" role="button" aria-label="Toggle theme">
        <i class="fas fa-adjust"></i>
      </a>
    </li>
  </ul>
</nav>



<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/dashboard" class="brand-link">
    <img src="../../img/logo.png" alt="AssetSys Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>

        @if(Auth::user()->role == 'Admin')
        <li class="nav-item">
          <a href="/users" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Users
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
        @endif

        <li class="nav-item">
          <a href="/asset" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Assets
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Assign Assets
              <i class="fas fa-angle-left right"></i>
              <!-- <span class="badge badge-info right">6</span> -->
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/indexf" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Tables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/indexf" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DataTables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/indexf" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>jsGrid</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Themes
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/themes" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>General</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/quickLink" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Icons</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/themes" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Buttons</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/quickLink" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sliders</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/themes" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Modals & Alerts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/quickLink" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Navbar & Tabs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/themes" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Timeline</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/quickLink" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ribbons</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Pages
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/PostBody" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Invoice</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/whatWeOffer" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/coa" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>E-commerce</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/PostBody" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Projects</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/whatWeOffer" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Add</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/coa" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Edit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('titles.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Detail</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/PostBody" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/whatWeOffer" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>FAQ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('titles.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contact us</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Settings
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/Simple" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Tables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/designation" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DataTables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/locations" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>jsGrid</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/lodge" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lodge</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/condition" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Condition</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/category" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Category</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/subcategory" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Subcategory</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/assignee" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Assignee</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/employee" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/supply" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Supply</p>
              </a>
            </li>

             <li class="nav-item">
              <a href="/item" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Item</p>
              </a>
            </li>

          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
@yield('contents')

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2024 <a href="#">Pasah Group</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../../dist/js/demo.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../../plugins/jszip/jszip.min.js"></script>
<script src="../../../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <!-- Summernote -->

<!-- Script for theme toggle -->
<script>
  document.getElementById('theme-toggle').addEventListener('click', function () {
    document.body.classList.toggle('dark-mode');
    document.body.classList.toggle('light-mode');
  });
</script>

<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
  <script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
    })
    $(function () {
      // Summernote
      $('#summernote1').summernote()
    })
    $(function () {
      // Summernote
      $('#summernote2').summernote()
    })
    $(function () {
      // Summernote
      $('#summernote3').summernote()
    })


<!-- Optional JS for tooltip and theme toggle -->

  // Initialize Bootstrap tooltips if using Bootstrap 4/5
  $(function () {
    $('[title]').tooltip();
  });

  // Theme toggle example (customize as needed)
  document.getElementById('theme-toggle').addEventListener('click', function(e) {
    e.preventDefault();
    document.body.classList.toggle('dark-mode');
    document.body.classList.toggle('light-mode');
    // Optionally save preference in localStorage
  });
</script>


   <script src="../../img_library/scripts.js" type="text/javascript"></script>
</body>
</html>
