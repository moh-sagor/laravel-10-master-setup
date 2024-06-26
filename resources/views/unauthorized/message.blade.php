<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('adminPanel/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!-- loader-->
    <link href="{{ asset('adminPanel/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('adminPanel/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('adminPanel/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminPanel/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('adminPanel/assets/css/icons.css') }}" rel="stylesheet">
    <title>Unauthorised</title>
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <div class="error-404 d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="card py-5">
                    <div class="row g-0">
                        <div class="col col-xl-5">
                            <div class="card-body p-4">
                                <h1 class="display-1"><span class="text-primary">4</span><span
                                        class="text-danger">0</span><span class="text-success">4</span></h1>
                                <h2 class="font-weight-bold display-4">Out of Range</h2>
                                <p>You have reached the edge of the universe.
                                    <br>The page you requested could not be found.
                                    <br>Dont'worry and return to the previous page.
                                </p>
                                <div class="mt-5">
                                    <a href="{{ url('/') }}" class="btn btn-primary btn-lg px-md-5 radius-30">Go
                                        Home</a>
                                    {{-- <a href="javascript:;"
                                        class="btn btn-outline-dark btn-lg ms-3 px-md-5 radius-30">Back</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <img src="https://cdn.searchenginejournal.com/wp-content/uploads/2019/03/shutterstock_1338315902.png"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
    <!-- Bootstrap JS -->
    <script src="{{ asset('adminPanel/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
