<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
      <!--start navbar-->

  <nav class="navbar">
    <div class="container">
        <a href="{{route('mainpage')}}" class="navbar-brand translate" langAR='الشعار' langEN='logo'></a>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="Switch">
            <label class="form-check-label" for="Switch">عربي</label>
        </div>
        <i class="fa-solid fa-bars" id="secondmenuicon"></i>
    </div>
  </nav>

  <!--end navbar-->

  <!--start loading animation -->
  <div class="animation">
    <div></div>
    <div></div>
    <div></div>
</div>
<!-- end loading animation -->

        <!--start small side bar-->
        <div class="small-sidebar">
            <ul>
                <li id="openMenuButton"><i class="fa-solid fa-bars"></i></li>
                <li><a href="{{route('mainpage')}}" class="active a"></a></li>
                @if (Auth()->user()->role == 'admin')
                    <li><a href="{{route('Admin')}}" class="a"><i class="fa-solid fa-gauge"></i></a></li>
                    <li><a href="{{route('item.view')}}" class="a"><i class="fa-solid fa-database"></i></a></li>
                    <li><a href="{{route('user.view')}}" class="a"><i class="fa-solid fa-user"></i></a></li>
                    <li><a href="{{route('exam.view.admin')}}" class="a"><i class="fa-solid fa-file-pen"></i></a></li>
                    <li><a href="{{route('image.add')}}" class="a"><i class="fa-solid fa-images"></i></a></li>
                    <li><a href="{{route('code.view')}}" class="a"><i class="fa-solid fa-barcode"></i></a></li>
                @endif
            </ul>
        </div>
        <!--end small side bar-->

        <!--start side bar-->
        <div class="sidebar">
            <div class="container-fluid">
                    <ul>
                        <button type="button" class="btn-close close"  aria-label="Close"></button>
                        <li><a href="{{route('mainpage')}}" class="active translate" langAR='الصفحة الرئيسية' langEN='main page'></a></li>
                        @if (Auth()->user()->role == 'admin')
                            <li><a href="{{route('Admin')}}" class="translate" langAR='لوحة التحكم الرئيسية' langEN='main control page'></a></li>
                            <li><a href="{{route('item.view')}}" class="translate" langAR='العناصر' langEN='elements'></a></li>
                            <li><a href="{{route('user.view')}}" class="translate" langAR='المستخدمين' langEN='users'></a></li>
                            <li><a href="{{route('exam.view.admin')}}" class="translate" langAR='الامتحانات' langEN='exams'></a></li>
                            <li><a href="{{route('image.add')}}" class="translate" langAR='الصور' langEN='photos'></a></li>
                            <li><a href="{{route('code.view')}}" class="translate" langAR='الأكواد' langEN='codes'></a></li>
                        @endif
                        <li><a href="{{route('auth.logout')}}" class="btn btn-danger translate" langAR='تسجيل الخروج' langEN='logout'></a></li>
                    </ul>
            </div>
        </div>
        <!--end side bar-->

        <div id="mainContentCol" class="main-content-div">
            @yield('content')
        </div>



    {{-- <footer>
        <div>جميع الحقوق محفوظة</div>
    </footer> --}}
</body>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</html>
