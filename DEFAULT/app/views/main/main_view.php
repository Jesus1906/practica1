<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body ng-app="app">
    <div ng-controller="playlistCtrl">
        <table>
            <thead>
                <th>Artista</th>
                <th>Album</th>
                <th>Año</th>
                <th>Canción</th>
                <th>Duración</th>
            </thead>
            <tbody ng-repeat="album in albums">
                <td ></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tbody>
        </table>
    </div>
</body>
</html>