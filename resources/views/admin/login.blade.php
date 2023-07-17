<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }}</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <link
            rel="stylesheet"
            href="{{ url('assets/vendor/sweetalert/js/sweetalert2.min.css') }}"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ url('assets_admin/css/login-admin.css') }}"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
        <!--===== ICON ===== -->
        <link rel="icon" href="{{ url('img/himsi-logo.png') }}" />
    </head>
    <body style="height: 100vh !important">
        <form action="{{ route('admin') }}" method="post" autocomplete="off">
            @csrf
            <div class="container">
                <div class="login">
                    <h2>Semangat Guys!</h2>
                    <div class="group12">
                        <input type="text" name="username" required />
                        <span>Username</span>
                        @error('username')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="group12">
                        <input type="password" name="password" required />
                        <span>Password</span>
                        @error('password'))
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="group12">
                        <input type="submit" name="login" value="Login" />
                    </div>
                </div>
            </div>
        </form>

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

    </body>
</html>
