var laravelPost = angular.module('laravelPost', ['ui.codemirror', 'ngAnimate']);

laravelPost.controller('EditorController', ['$scope', '$window', function($scope, $window) {
    //codemirror editor settings
    $scope.editorOptions = {
        lineWrapping : true,
        indentUnit : 4,
    };

    //get word count of text
    $scope.countOf = function(text) {
        if(!text) {
            return 0;
        }
        // search for matches and count them
        else {
            var matches = text.match(/[^\s\n\r]+/g);
            return matches ? matches.length : 0;
        }
    };
}]);


laravelPost.controller('FooterController', ['$scope', function($scope) {
    //set defaults for publish status
     $scope.init = function(text, status) {
        $scope.submitText = text;
        $scope.submitStatus = status;
     }
    //toggle the publish status value
    $scope.updateSubmit = function(value) {
        $scope.submitText = value;
    };
}]);

//commonmark directive
laravelPost.directive('commonmark', function () {
    var writer = new commonmark.HtmlRenderer();
    return {
        restrict: 'A',
        link: function (scope, element, attrs) {
            var htmlText = writer.render(element.text());
            element.html(htmlText);
        }
    };
});

//commonmark filter
laravelPost.filter('commonmark', function ($sce) {
    var reader = commonmark.DocParser();
    var writer = new commonmark.HtmlRenderer();
    return function (value) {
        var html = writer.render(reader.parse(value || ''));
        return $sce.trustAsHtml(html);
    };
});
