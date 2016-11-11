'use strict';
var newsApp = angular.module('newsApp', [
	'ngRoute',
	'postCtrl',
], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

// Thiết lập ứng dụng
newsApp.config(['$routeProvider', '$compileProvider', function($routeProvider, $compileProvider) {
	$compileProvider.debugInfoEnabled(false);

	// $routeProvider.
	// when('/post', {
	// 	controller: 'PostListCtrl'
	// }).
	// when('/post/add', {
	// 	controller: 'PostAddCtrl'
	// }).
	// when('/post/edit/:id', {
	// 	controller: 'PostEditCtrl'
	// }).
	// otherwise({
	// 	redirectTo: '/'
	// });
}]);