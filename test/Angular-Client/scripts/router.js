'use strict';

angular.module('Client',['ngResource','ngRoute'])
	.config(function($routeProvider){
		$routeProvider
		.when('/notes',{
			templateUrl: 'views/note/index.html',
			controller: 'IndexNoteCtrl'
		})
		.when('/notes/new',{
			templateUrl: 'views/note/create.html',
			controller: 'CreateNoteCtrl'
		})
		.when('/notes/edit/:id',{
			templateUrl: 'views/note/create.html',
			controller: 'EditNoteCtrl'
		})
		.when('/films',{
			templateUrl: 'views/film/index.html',
			controller: 'IndexFilmCtrl'
		})
		.when('/films/new',{
			templateUrl: 'views/film/create.html',
			controller: 'CreateFilmCtrl'
		})
		.when('/films/edit/:id',{
			templateUrl: 'views/film/create.html',
			controller: 'EditFilmCtrl'
		})
		.otherwise({
			redirectTo: '/'
		});
	});