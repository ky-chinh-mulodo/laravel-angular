<!doctype html>
<html lang="en" ng-app="newsApp">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <div class="container-fluid">
      <div class="row">
        @include('includes.sidebar')
        @yield('content')
      </div>
    </div>  
    @include('includes.footer')
</body>
</html>