<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="<?= constant('base_url')?>js/angular.min.js"></script>
    <script defer src="<?= constant('base_url')?>js/playlist/canciones-controller.js"></script>
    <script type="text/javascript">
        var base_url = '<?= constant('base_url')?>';
    </script>
    <title>Document</title>
</head>
<body ng-app="app">
    <div ng-controller="playlistCtrl">
        <table>
            <thead>
                <th>Artista</th>
                <th>Albums</th>
                <th>Año</th>
                <th>Canción</th>
                <th>Duración</th>
            </thead>
            <tbody ng-repeat="artista in artistas">
                <tr>
                <td>{{artista.artista}}</td>
                <td ng-repeat="album in artista.albums">{{album.album}}</td>
                <td ng-repeat="album in artista.albums">{{album.anio}}
                    <p ng-repeat="cancion in album.canciones">{{cancion.cancion}}</p>
                </td>
                </tr>
                
                
                <!-- <td ng-repeat="cancion in artista.albums.canciones">{{cancion.cancion}}</td> -->
                <td></td>
            </tbody>
        </table>
    </div>
</body>
</html>