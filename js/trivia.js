(function(){
    var app = angular.module('trivia', []);
    
    app.controller('QuizController', ['$scope','$http','$sce', function($scope,$http,$sce){
        $scope.score = 0;
        $scope.activeQuestion = -1;
        $scope.activeQuestionAnswered = 0;
        $scope.percentage = 0;
        
        $http.get('quiz_data.json').then(function(quizData){
            
        });
        
    }]);
    
    
})();