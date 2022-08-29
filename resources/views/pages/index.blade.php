<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">

          <title>{{ config('app.name', 'Laravel') }}</title>
      
          <!-- Fonts -->
          <link rel="dns-prefetch" href="//fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      
          <!-- Scripts -->
          @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Title Page-->
    <title>Insert Data</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('pages.store.view') }}">
                                        View File
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
    {{-- Form Start HERE --}}
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    
                    <h2 class="title">@guest
                        
                         @if (Route::has('register'))
                                        Please Login First
                                    @endif
                                    @else
                                        Thank You For Login
                                        <p style="text-align:center;color:#F4F2F2; font-size:10px !important;">Insert Data Very Carefully</p>
                                        @endguest
                                    </h2>
                </div>
                <div class="card-body">
                    <form action="{{route('pages.store.index')}}" method="POST">
                        @csrf
                        <div class="form-row m-b-55">
                            <div class="name">Course</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input required class="input--style-5" type="text" name="course_tittle">
                                            <label class="label--desc">Course Tittle</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input required class="input--style-5" type="text" name="course_code">
                                            <label class="label--desc">Course Code</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Select Item</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select required name="report_item">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="Lab Report On">Lab Report</option>
                                            <option value="Project Report On">Project Report</option>
                                            <option value="Assignment On">Assignment</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Topics Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input required class="input--style-5" type="text" name="topic_name">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div style="text-align: center; font-size:20px;" class="name text-center">Submitted By</div>
                        <hr>
                        <br>
                        <div class="form-row">
                            <div class="name">Full Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input required class="input--style-5" type="text" name="std_name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Details</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input required class="input--style-5" type="number" name="id_no">
                                            <label class="label--desc">Id No</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input required class="input--style-5" type="text" name="session">
                                            <label class="label--desc">Session</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Department</div>
                            <div class="value">
                                <div class="input-group">
                                    <input required class="input--style-5" type="text" name="std_dept">
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div style="text-align: center; font-size:20px;" class="name text-center">Submitted To</div>
                        <hr>
                        <br>
                        <div class="form-row">
                            <div class="name">Full Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input required class="input--style-5" type="text" name="teacher_name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Designation</div>
                            <div class="value">
                                <div class="input-group">
                                    <input required class="input--style-5" type="text" name="designation">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Department</div>
                            <div class="value">
                                <div class="input-group">
                                    <input required class="input--style-5" type="text" name="teacher_dept">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Sub. Date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input required class="input--style-5" type="date" name="sub_time">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Generate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->