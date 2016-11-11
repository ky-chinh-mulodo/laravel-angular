@extends('layouts.default')
@section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ng-controller="PostListCtrl">
          <h2 class="page-header">Quản Lý Bài Viết <a href="{!! url('/post/add'); !!}" class="btn btn-primary pull-right" title="Tạo mới">Tạo mới</a></h2>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tiêu đề</th>
                  <th>Trạng thái</th>
                  <th>Người đăng</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="post in posts">
                  <td>[[post.id]]</td>
                  <td>[[post.title]]</td>
                  <td ng-if="post.status == 1">Show</td>
                  <td ng-if="post.status == 0">Hide</td>
                  <td>[[post.create_by]]</td>
                  <td>
                    <button class="btn btn-danger" ng-click="delete(post)">Xóa</button>
                    <a class="btn btn-primary" href="{!! url('/post/edit/[[post.id]]'); !!}">Sửa</a>
                  </td>
                </tr>
                
              </tbody>
            </table>
            <!-- <ul class="pagination pull-right">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul> -->
          </div>
        </div>
@stop
