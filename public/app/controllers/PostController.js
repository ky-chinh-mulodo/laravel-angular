'use strict';
var postCtrl = new angular.module('postCtrl', []);
postCtrl.controller('PostListCtrl', ['$scope','Post', function($scope, Post){
	// console.log('okoo');
	Post.all(function (results) {
		// var posts = results && results.posts && results.posts.data;
		// console.log(results);
		console.log(results.data);
		$scope.posts = results.data;
		// $scope.aa = 'okoo';
	});
	var post;
	$scope.delete = function (input) {
		post = angular.copy(input);
		Post.delete (post.id, function(){
			Post.all(function(results) {
				var posts = results.data;
				if (posts) {
					$scope.posts = posts;
				}
			});
		});
	}
}]);

postCtrl.controller('PostAddCtrl', ['$scope', '$location', '$window', 'Post', function($scope, $location, $window, Post){
	$scope.add = function (input) {
		var post = angular.copy(input);
		Post.add({
			title: post.title,
			content: post.content,
			status: post.status,
		}, function (result) {
	        var host = $location.host();
	        $window.location.href = 'http://'+host+'/post/';
		});
	}
}]);


postCtrl.controller('PostEditCtrl', ['$scope', '$routeParams', '$location', '$window', 'Post', function($scope, $routeParams, $location, $window,Post){
	var pathname = $window.location.href;
	$scope.id = pathname.split("/").pop(-1);

	Post.show($scope.id, function (results) {
		$scope.input = results.post;
	});

	$scope.update = function (input){
		var post = angular.copy(input);
		Post.update($scope.id, {
			title: post.title,
			content: post.content,
			status: post.status,
		}, function (results) {
			var host = $location.host();
	        $window.location.href = 'http://'+host+'/post/';
		})
	}

}]);