@extends('layouts.default')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ng-controller="PostAddCtrl">
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
@stop