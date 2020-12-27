<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm Laravel</title>
    <!-- <link rel="stylesheet" href="../css/app.css"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    </script>
</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }
    /* .footer {
        position: absolute;
        left: 0;
        bottom: 0;
    }
    .card-header {
        display: flex;
        flex: 1;
    } */
    .slider-img {
        height: 300px;
        width: 400px;
    }
    .carousel-inner {
        background-color: #d4ebf2;
    }
    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: red;
    }
    .carousel-caption {
        font-size: 16px;
        color: black;
    }
    .trending-image {
        height: 100px;
        width: 150px;
    }
    .trending-item {
        display: flex;
        width: 20%;
    }
    .detail-img {
        height: 200px;
        width: 300px;
    }
    .product_price {
        color: red;
    }
    .search-box {
        width: 500px !important;
        outline: none;
    }
</style>
</html>