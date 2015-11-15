angular.module('nyariCtrl', [])
	// inject the Status service into our controller
	.controller('kategoriCtrl', function($scope, $http, Kategori) {
	    // object to hold all the data for the new Status form
	    $scope.KategoriData = {};
	
	    // loading variable to show the spinning loading icon
	    $scope.loading = true;
	
	    // get all the Statuss first and bind it to the $scope.Statuss object
	    // use the function we created in our service
	    // GET ALL StatusS ==============
	    Kategori.get()
	        .success(function(data) {
	            $scope.KategoriData = data;
	            $scope.loading = false;
	        });
	
	    // function to handle submitting the form
	    // SAVE A Status ================
	    $scope.submitStatus = function() {
	        $scope.loading = true;
	        
	        // save the Status. pass in Status data from the form
	        // use the function we created in our service
	        Status.save($scope.statusData)
	            .success(function(data) {
	            	console.log(data);
	                // if successful, we'll need to refresh the Status list
	                Status.get()
	                    .success(function(getData) {
	                        $scope.Status = getData;
	                        $scope.loading = false;
	                    });
	
	            })
	            .error(function(data) {
	                console.log(data);
	            });
	    };
	})
	.controller('clientTypeController', function($scope, $http, ClType){
		$scope.data = {};
		
		ClType.get()
			.success(function(data){
				$scope.ClType = data;
			});
		
		$scope.submitClType = function(){
			ClType.save($scope.data)
				.success(function(data){
					console.log(data);
					
					ClType.get()
						.success(function(getData){
							$scope.ClType = getData;							
						});
				})
				.error(function(data){
					console.log(data);
				});
		};
	});