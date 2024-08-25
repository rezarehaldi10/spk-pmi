<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PMI - Login</title>

    @include('admin.includes.style')

</head>

<body class="bg-login-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center ">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                @if (session()->has('incorrect'))
                                    <div class="alert alert-danger text-center my-2 mx-2">
                                        <p class="h6">{{ session('incorrect') }}</p>
                                    </div>
                                @endif
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login.post') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="inputUsername" aria-describedby="usernameHelp"
                                                placeholder="Masukkan Username..." name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="inputPassword" placeholder="Password" name="password">
                                        </div>
                                        <button type="submit" class="btn btn-danger btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('admin.includes.script')
    <script>
        $(".alert").fadeTo(3000, 500).slideUp(500, function() {
            $(".alert").slideUp(500);
        });
        @if (session()->has('warning'))
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session('warning') }}",
                customClass: 'swal-height'
            })
        @endif
    </script>
</body>

</html>
