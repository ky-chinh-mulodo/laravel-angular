'use strict';
newsApp.factory('Post', ['$rootScope', '$http', function($rootScope, $http){
	
	this.all = function (callback) {
		$http.get('api/post').then(function (results) {
			// console.log(results)
			// console.log(results)
			callback(results);
		})
	};

	this.delete = function(id, callback) {
		$http.delete('api/post/' + id).then(function(results) {
			callback(results);
		});
	};

	this.add = function (data ,callback) {
		$http.post('/api/post/add', data).then(function(results) {
			callback(results);
		});
	}

	this.update = function (id, data, callback) {
		$http.put('/api/post/edit/' + id, data).then(function(results) {
			callback(results);
		});
	}

	this.show = function (id,callback) {
		$http.get('/api/post/show/' + id).then(function(results) {
			callback(results.data);
		});
	}

	return this;
}])
