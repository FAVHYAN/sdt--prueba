'use strict';

angular.module('Client')
	.controller('IndexFilmCtrl', function($scope, FilmResource, $location, $timeout) {
		$scope.Films = FilmResource.query();

		$scope.removeFilm = function(id) {
			FilmResource.delete({
				id: id
			});
			Materialize.toast('Deleted Movie', 5000, 'green accent-4');
			$timeout(function() {
				$location.path('/films');
			}, 1000);
		};
	})
	.controller('CreateFilmCtrl', function($scope, FilmResource, $location, $timeout) {
		$scope.title = "film Create";
		$scope.button = "Save";
		$scope.Film = {};
		$scope.saveFilm = function() {
			console.log($scope.Film);
			FilmResource.save($scope.Film);
			Materialize.toast('film created.', 5000, 'green accent-4');
			$timeout(function() {
				$location.path('/films/new');
			}, 1000);
		};
	})
	.controller('EditFilmCtrl', function($scope, FilmResource, $location, $timeout, $routeParams) {
		$scope.title = "Edit movie";
		$scope.button = "Update";
		$scope.Film = FilmResource.get({
			id: $routeParams.id
		});

		$scope.saveFilm = function() {
			FilmResource.update($scope.Film);
			Materialize.toast('Movie updated.', 5000, 'green accent-4');
			$timeout(function() {
				$location.path('/films');
			}, 1000);
		};
	});