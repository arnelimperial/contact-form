        <!--Angular app -->
        <script>
            var app = angular.module('formApp', []);
            app.controller('validateCntrl', function($scope) {
                $scope.user = '';
                $scope.email = '';
                $scope.message = '';
                $scope.thanks = '';
            });
        </script>