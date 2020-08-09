var topic = angular.module('app', []);
topic.controller('TopicController', TopicController);

function TopicController($scope, $http) {
    
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

             console.log($scope.sub_categories);

        });
        

    };

    // $scope.getMarkType = function() 
    // {

    //     $http
    //     .get(window.location.origin+"/admin/marks/type/" + $scope.exam.course_id, {
    //         transformRequest: angular.identity,
    //         headers: {'Content-Type': undefined, 'Process-Data': false}
    //     })
    //     .then(function(response){
    //          $scope.mark_types = response.data;

    //     });
        

    // };
}

