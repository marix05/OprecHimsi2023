<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets_admin/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ url('assets_admin/vendor/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ url('assets_admin/vendor/chartjs/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets_admin/vendor/jquery-datatables/jquery.dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets_admin/vendor/fontawesome/all.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets_admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ url('assets_admin/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ url('assets_admin/css/app.css') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="{{ url('assets/vendor/sweetalert/js/sweetalert2.min.css') }}"
    />

    <!--===== ICON ===== -->
    <link rel="icon" href="{{ url('img/himsi-logo.png') }}" />
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top pt-3 pb-2">
                    <div class="container">
                        <div class="logo" style="display: inline-flex;">
                            <h4 class="pt-1">OPREC BPH 2023</h4>
                        </div>

                        <div class="header-top-right">

                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item">
                                <a href="{{ route('adminDashboard') }}" class='menu-link'>
                                    <i class="bi bi-grid-fill" style="margin-bottom: 5px"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            @if (Auth::user()->divisi === 'Admin')
                              <li class="menu-item">
                                  <a href="{{ route('recruit') }}" class='menu-link'>
                                      <i class="bi bi-exclamation-triangle-fill" style="margin-bottom: 5px"></i>
                                      <span>Recruit</span>
                                  </a>
                              </li>

                              <li class="menu-item">
                                  <a href="{{ route('forgotPassword') }}" class='menu-link'>
                                      <i class="bi bi-exclamation-octagon-fill" style="margin-bottom: 5px"></i>
                                      <span>Forgot Password</span>
                                  </a>
                              </li>
                            @endif
                            <li class="menu-item">
                              <form action="{{ route('adminLogout') }}" method="post">
                                  @csrf
                                  <button type="submit" class='submenu-link btn btn-warning text-dark'>Logout</button>
                              </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            @yield('index')
            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; PTI - OPREC BPH 2023</p>
                        </div>
                        <div class="float-end">
                            <p>Mazer Template by <a href="https://ahmadsaugi.com" target="_blank">A. Saugi</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    
    <!-- Sweet Alert -->

    <script src="{{ url('assets/vendor/sweetalert/js/sweetalert2.min.js') }}"></script>

    @if (session()->has('success'))
    <script>
        Swal.fire({
            title: "Berhasil!",
            text: "{{ session('success') }}",
            icon: "success",
        });
    </script>
    @endif @if (session()->has('error'))
    <script>
        Swal.fire({
            title: "Error!",
            text: "{{ session('error') }}",
            icon: "error",
        });
    </script>
    @endif
    
    <script src="{{ url('assets_admin/vendor/chartjs/Chart.min.js') }}"></script>
    <script src="{{ url('assets_admin/js/pages/ui-chartjs.js') }}"></script>

    <script src="{{ url('assets_admin/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('assets_admin/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ url('assets_admin/js/pages/dashboard.js') }}"></script>
    <script src="{{ url('assets_admin/js/pages/horizontal-layout.js') }}"></script>

    <script src="{{ url('assets_admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets_admin/vendor/jquery-datatables/jquery.dataTables.min.js') }}"></script>

    <script src="{{ url('assets_admin/vendor/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ url('assets_admin/vendor/fontawesome/all.min.js') }}"></script>

    <script src="{{ url('assets_admin/js/main.js') }}"></script>
    
    @if ($nav['active'] == 'dashboard')
      <script src="{{ url('js/admin/dashboard.js') }}"></script>
    @endif
</body>

</html>