var topic = angular.module('app', []);
topic.controller('TopicContentController', TopicContentController);

function TopicContentController($scope, $http) {
    
    
    $scope.sub_category_id = angular.element('#select_sub_category_id')[0].value;

    $scope.category_id = angular.element('#select_category_id')[0].value;

    $scope.topic_id = angular.element('#select_topic_id')[0].value;
	
	console.log($scope.sub_category_id);

    $scope.show = {
        show:true,
        show2:false,
        show3:true
    }

    

  	
  	$http
    .get(window.location.origin+"/admin/sub-category/edit/find/"+$scope.category_id, {
        transformRequest: angular.identity,
        headers: {'Content-Type': undefined, 'Process-Data': false}
    })
    .then(function(response){
         $scope.sub_categories = response.data;

    });
    

	$http
    .get(window.location.origin+"/admin/topic/edit/find/"+$scope.sub_category_id, {
        transformRequest: angular.identity,
        headers: {'Content-Type': undefined, 'Process-Data': false}
    })
    .then(function(response){
         $scope.topics = response.data;
    });

    $scope.getSubCategory = function() 
    {


        $http
        .get(window.location.origin+"/admin/sub-category/find/" + $scope.category_id, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined, 'Process-Data': false}
        })
        .then(function(response){
             $scope.sub_categories = response.data;

        });
        $scope.show = {
        	show:false,
        	show2:true,
        	show3:false
   		}
        
        

    };

    $scope.getTopic = function() 
    {
        $http
        .get(window.location.origin+"/admin/topic/find/" + $scope.sub_category_id, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined, 'Process-Data': false}
        })
        .then(function(response){
             $scope.topics = response.data;
        });

        $scope.show = {
        	show:true,
        	show2:true,
        	show3:false
   		}
        

    };
}

