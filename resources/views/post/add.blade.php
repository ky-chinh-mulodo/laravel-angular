
<!DOCTYPE html>
<html lang="en" ng-app="newsApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Màn hình danh sách bài viết</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{!! asset('css/ie10-viewport-bug-workaround.css') !!}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{!! asset('css/posts.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{!! asset('js/ie-emulation-modes-warning.js') !!}"></script>
    <script src="{!! asset('app/components/angular.min.js') !!}"></script>
    <script src="{!! asset('app/components/angular-route.min.js') !!}"></script>
    <script src="{!! asset('app/components/angular-route.min.js') !!}"></script>
    <script src="{!! asset('app/app.js') !!}"></script>
    <script src="{!! asset('app/controllers/PostController.js') !!}"></script>
    <script src="{!! asset('app/services/PostService.js') !!}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid" ng-controller="PostAddCtrl">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="posts.html">Quản Lý Bài Viết </a></li>
            <li><a href="members.html">Quản Lý Ứng Viên</a></li>
            <li><a href="setting.html">Thiết Lập Hệ Thống</a></li>
            <li><a href="user.html">Quản Lý Nhân Viên</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Thêm bài viết</a></h2>
          <div class="table-responsive">
            <!-- <form> -->
              <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" ng-model="input.title" class="form-control" id="title" placeholder="Tiêu đề">
              </div>
              <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea ng-model="input.content" class="form-control" rows="3"></textarea>
              </div>
              <label for="">Trạng thái</label>
              <div class="form-group">
                <label class="radio-inline ">
                  <input type="radio" ng-model="input.status" value="1"> Hiển thị
                </label>
                <label class="radio-inline">
                  <input type="radio" ng-model="input.status"  value="0"> Ẩn
                </label>
              </div>
              <button ng-click="add(input);" class="btn btn-primary">Lưu</button>
              <a href="<?= url('/post'); ?>" class="btn btn-default">Quay lại</a>
            <!-- </form> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{!! asset('js/holder.min.js') !!}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{!! asset('js/ie10-viewport-bug-workaround.js') !!}"></script>
  </body>
</html>
