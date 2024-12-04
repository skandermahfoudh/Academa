<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<style>
.sidebar {
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}


.sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
}


.sidebar a.active {
    background-color: #04AA6D;
    color: white;
}


.sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
}


div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
}


@media screen and (max-width: 700px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }

    .sidebar a {
        float: left;
    }

    div.content {
        margin-left: 0;
    }
}


@media screen and (max-width: 400px) {
    .sidebar a {
        text-align: center;
        float: none;
    }
}
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1> Welcome, {{ Auth::user()->name }}</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a a class="navbar-brand" href="#">

                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">

                <div class="sidebar">
                    <a class="active" href="#home">Home</a>
                    <a href="{{url('/students')}}">Student</a>
                    <a href="{{url('/teachers')}}">Teacher</a>
                    <a href="{{url('/courses')}}">Courses</a>
                    <a href="{{url('/batches')}}">Batches</a>
                    <a href="{{url('/enrollments')}}">Enrollment</a>
                    <a href="{{url('/payments')}}">Payment</a>
                </div>
            </div>
            <div class="col-md-9">

                @yield('content')

            </div>
        </div>

    </div>
    </nav>

</body>

</html>