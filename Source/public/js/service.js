angular.module('nyariService', [])
	.factory('Kategori', function($http) {	
	    return {
	        // get all the status
	        get : function() {
	            return $http.get('/api/kategori');
	        },
	
	        // save a status
	        save : function(data) {	            
	            return $http.post('/api/kategori', data);
	        }
	    }
	})
	.factory('ClType', function($http){
		return {
			get: function() {
				return $http.get('/api/cltype');
			},
			save: function(data) {
				return $http.post('/api/cltype', data);
			}
		}
	})