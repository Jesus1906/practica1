// /* global angular */

// var app = angular.module('app', []);
// app.controller('preguntasRespuestasCtrl', function ($scope, $http, $window, $sce) {
//     $scope.respuestas_usuario = {};
//     $scope.click_next = false;

//     $scope.send_respuestas_usuario = function () {
//         $scope.valid_form();

//         $scope.click_next = true;
//         if (!$scope.hay_vacios) {
//             $window.scrollTo(0, 0);
//             view_loader();
//             var datasend = angular.copy($scope.respuestas_usuario);
//             $http({
//                 method: "POST",
//                 url: base_url + "test/guardar_respuestas_usuario/",
//                 data: datasend
//             }).then(function (response) {
//                 $scope.respuestas_usuario = {};
//                 if (response.data.code == '401') {
//                     window.location = base_url + "asd";
//                 } else if (response.data.code == '201') {
//                     window.location = base_url + "fin";
//                 } else {
//                     $scope.get_preguntas_and_respuestas();
//                     remove_loader();
//                 }
//             });
//         }
//         $scope.click_next = false;
//     };

//     $scope.get_preguntas_and_respuestas = function () {
//         $http({
//             method: "GET",
//             url: base_url + "test/get_preguntas_honestidad"
//         }).then(function (response) {
//             $scope.factor = response.data.factor
//             $scope.preguntas = response.data.preguntas;
//         });
//     };

//     $scope.valid_form = function () {
//         $scope.hay_vacios = false;
//         $scope.valid_inputs();
//     }

//     $scope.valid_inputs = function () {
//         let inputs = document.querySelectorAll('#form-honestidad input');
//         inputs.forEach((input) => {
//             $scope.valid_inputs_radio_or_check(input);
//         });
//     };

//     $scope.valid_inputs_radio_or_check = function (input) {
//         let input_name = input.name;
//         if (!document.querySelector('#form-honestidad input[name="' + input_name + '"]:checked')) {
//             $scope.hay_vacios = true;
//             // $scope.sin_responder(input.name);
//         }
//     };

//     $scope.renderHtml = function (htmlCode) {
//         return $sce.trustAsHtml(htmlCode);
//     };

//     $scope.get_preguntas_and_respuestas();
//     remove_loader();
// });

