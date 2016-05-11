(function () {
    var app = angular.module('trivia', []);

    app.controller('QuizController', ['$scope', '$http', '$sce', function ($scope, $http, $sce) {

        $scope.score = 0;
        $scope.activeQuestion = -1;
        $scope.activeQuestionAnswered = 0;
        $scope.percentage = 0;

        $http.get('quiz_data.json').then(function (quizData) {
            $scope.myQuestions = quizData.data;
            $scope.totalQuestions = $scope.myQuestions.length;
        });

        $scope.selectAnswer = function (qindex, aIndex) {

            var questionState = $scope.myQuestions[qindex].questionState;

            if (questionState != 'answered') {
                $scope.myQuestions[qindex].selectedAnswer = aIndex;
                var correctAnswer = $scope.myQuestions[qindex].correct;
                $scope.myQuestions[qindex].correctAnswer = correctAnswer;
                
                if (aIndex === correctAnswer) {
                    $scope.myQuestions[qindex].correctness = 'correct';
                    $scope.score += 1;
                } else {
                    $scope.myQuestions[qindex].correctness = 'incorrect';
                }
                $scope.myQuestions[qindex].questionState = 'answered';
            }

        }
        
        $scope.isSelected = function(qindex, aIndex){
            return $scope.myQuestions[qindex].selectedAnswer === aIndex;
        }
        $scope.isCorrect = function(qindex, aIndex){
            return $scope.myQuestions[qindex].correctAnswer === aIndex;
        }

    }]);


})();