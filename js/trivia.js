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
            
           $scope.percentage = (($scope.score/$scope.totalQuestions)*100).toFixed();
        } 

        
        $scope.isSelected = function(qindex, aIndex){
            return $scope.myQuestions[qindex].selectedAnswer === aIndex;
        }
        $scope.isCorrect = function(qindex, aIndex){
            return $scope.myQuestions[qindex].correctAnswer === aIndex;
        }
        $scope.selectContinue = function(){
            return $scope.activeQuestion +=1;
        }
        $scope.createShareLinks = function(percentage){
            
            var url = 'http://arriveatlast.com';
            
            var emailLink = '<a class="btn email" href="mailto:?subject=Try to beat my quiz score!&amp;body=I scored a '+percentage+'% on this Photo Trivia Quiz. Try to beat my score at '+url+'">Email</a>';
            
            var twitterLink = '<a class="btn tweet" target="_blank" href="http://twitter.com/share?text=I scored a '+percentage+'% on this Photo Trivia Quiz.  Try to beat my score at&amp;hashtags=PhotoTriviaQuiz&amp;url='+url+'">Tweet</a>';
            
            var newMarkup = emailLink + twitterLink;
            
            return $sce.trustAsHtml(newMarkup);

        }
        
        
    }]);


})();