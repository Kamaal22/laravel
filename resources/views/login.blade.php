<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    {{-- <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"> --}}
    <!-- App Css-->
    {{-- <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>


    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4">
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <p class="text-white-50">Sign in to continue to MS.</p>

                                @if (Session::get('status'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="p-3">
                                <form class="mt-4" action="loginverify" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="username"
                                            placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Enter password">
                                    </div>

                                    <div class="mb-3 row">

                                        <div class="mt-3">
                                            <button class="btn btn-success rounded-3" style="width: 100%;"
                                                type="submit">Log
                                                In</button>
                                        </div>
                                    </div>

                                    <div class="mt-3 row text-center">
                                        <a href="#" class="text-success">Forgot your
                                            password?</a>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    {{-- <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script> --}}

</body>

</html>
