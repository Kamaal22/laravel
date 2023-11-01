<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">



    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    {{-- <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"> --}}
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">


</head>

<body>


    <div class="account-pages mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-success">
                            <div class="text-primary text-center p-4">
                                <h3 class="text-white">Forgot Password</h3>

                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="p-3">
                                <div class="row justify-content-center">
                                    @if (session('success'))
                                        <span
                                            class="alert alert-success w-100 rounded-0 text-center">{{ session('success') }}</span>
                                    @endif
                                    @if (session('fail'))
                                        <span
                                            class="alert alert-danger w-100 rounded-0 text-center">{{ session('fail') }}</span>
                                    @endif
                                    <form method="POST" action="send-otp">
                                        @csrf
                                        {{-- <div class="form-group"> --}}
                                        {{-- <label for="username">Username</label> --}}
                                        <input type="text" name="username" class="form-control w-100" id="username"
                                            placeholder="Enter Username or Email">
                                        {{-- </div> --}}

                                        <button type="submit" class="btn btn-success mt-3 w-100">Send
                                            OTP &#8594;</button>

                                        <div class="mt-5">
                                            <a href="send-otp-phone">Send by phone &#8594;</a>
                                        </div>
                                </div>

                                </form>

                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>



    <script src="assets/js/app.js"></script>
</body>

</html>
