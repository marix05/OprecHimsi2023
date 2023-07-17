<!DOCTYPE html>
<html lang="en">
    <head>
        <!--===== TITLE ===== -->
        <title>{{ $title }}</title>

        <!--===== META ===== -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
            content="Open Recruitment HIMSI Fasilkom Unsri 2021"
        />
        <meta name="author" content="RISTEK HIMSI 2023/2024" />
        <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--===== CSS ===== -->
        <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" type="text/css" />
        <link
            rel="stylesheet"
            href="{{ url('assets/css/owl.carousel.css') }}"
            type="text/css"
        />
        <link
            rel="stylesheet"
            href="{{ url('assets/css/owl.theme.css') }}"
            type="text/css"
        />
        <link
            rel="stylesheet"
            href="{{ url('assets/css/owl.transitions.css') }}"
            type="text/css"
        />
        <link
            rel="stylesheet"
            href="{{ url('assets/css/magnific-popup.css') }}"
            type="text/css"
        />
        <link rel="stylesheet" href="{{ url('assets/css/coloring.css') }}" type="text/css" />
        <link
            rel="stylesheet"
            href="{{ url('assets/vendor/sweetalert/js/sweetalert2.min.css') }}"
        />
        
        <!-- ===== BOX ICONS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

        <!--===== ICON ===== -->
        <link rel="icon" href="{{ url('img/himsi-logo.png') }}" />

        <link
            rel="stylesheet"
            href="{{ url('https://unicons.iconscout.com/release/v4.0.0/css/line.css') }}"
        />

        <!--===== COLOR SCEME ===== -->
        <link
            rel="stylesheet"
            href="{{ url('assets/css/colors/orange.css') }}"
            type="text/css"
        />

        <!--===== GOOGLE FONT ===== -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />

        <!-- CSS -->
        @if ($nav['active'] === 'index')
            <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}" type="text/css">
            <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css" />
            <link rel="stylesheet" href="{{ url('css/web/index.css') }}" type="text/css">
        @elseif ($nav['active'] === 'registration' || $nav['active'] === 'infoHimsi')
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
            <link rel="stylesheet" href="{{ url('css/web/registration.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/style-form.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/style2.css') }}" type="text/css" />
        @endif
    </head>

    <style>
      ::-webkit-scrollbar {
        width: 0.5rem;
      }

      ::-webkit-scrollbar-thumb {
        background: #923A2C;
      }

      ::-webkit-scrollbar-track {
        background: #272525;
      }
    </style>
    
    <body id="homepage" class="homepage">
        <div id="wrapper" class="fullwidth no-padding">
            @yield('index')
            <div id="preloader">
                <div class="s1">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <!-- Sweet Alert -->
        <script src="{{ url('assets/vendor/sweetalert/js/sweetalert2.min.js') }}"></script>

        @if (session()->has('success'))
          <script>
            Swal.fire({
              title:'Berhasil!', 
              text: "{{ session('success') }}",
              icon: 'success',
            });
          </script>
        @endif
        @if (session()->has('error'))
          <script>
            Swal.fire({
              title:'Error!', 
              text: "{{ session('error') }}",
              icon: 'error',
            });
          </script>
        @endif
        
        <!--===== JS ===== -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ url('assets/js/jquery.min.js') }}"></script>
        <script src="{{ url('assets/js/jquery.isotope.min.js') }}"></script>
        <script src="{{ url('assets/js/easing.js') }}"></script>
        <script src="{{ url('assets/js/owl.carousel.js') }}"></script>
        <script src="{{ url('assets/js/jquery.countTo.js') }}"></script>
        <script src="{{ url('assets/js/validation.js') }}"></script>
        <script src="{{ url('assets/js/wow.min.js') }}"></script>
        <script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ url('assets/js/enquire.min.js') }}"></script>
        <script src="{{ url('assets/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ url('assets/js/jquery.plugin.js') }}"></script>
        <script src="{{ url('assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ url('assets/js/typed.js') }}"></script>
        <script src="{{ url('assets/js/typed-custom-2.js') }}"></script>
        <script src="{{ url('assets/js/particles.js') }}"></script>
        <script src="{{ url('assets/js/app.js') }}"></script>
        <script src="{{ url('assets/js/designesia.js') }}"></script>

        @if ($nav['active'] === 'index')
            <script src="{{ url('js/web/index.js') }}"></script>
        @elseif ($nav['active'] === 'registration' || $nav['active'] === 'infoHimsi')
            <script src="{{ url('js/web/infoHimsi.js') }}"></script>
            <script src="{{ url('js/web/registration.js') }}"></script>
        @endif

        {{-- <script>
          document.addEventListener("contextmenu", function(e){
            e.preventDefault();
          }, false);
        </script> --}}
        
    </body>
</html>
