'use strict';

angular.module('Client')
	.factory('FilmResource', function($resource){
			return $resource("http://localhost:8000/films/:id", {
					id: "@id"
				}, {
					update: {
						method: "PUT"
					}
				});
			});