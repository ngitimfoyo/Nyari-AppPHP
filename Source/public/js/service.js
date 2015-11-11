angular.module('statusService', [])
	.factory('Status', function($http) {	
	    return {
	        // get all the status
	        get : function() {
	            return $http.get('/api/status');
	        },
	
	        // save a status
	        save : function(data) {	            
	            return $http.post('/api/status', data);
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