var topic = angular.module('app', []);
topic.controller('TopicContentController', TopicContentController);

function TopicContentController($scope, $http) {
    
    console.log('ok');
    $scope.exam = {
    	exam_id: 0,
    	course_id: 0
    }

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
        

    };
}

