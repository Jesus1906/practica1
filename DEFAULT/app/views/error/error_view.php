<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="favicon.ico">
    <!-- Reset estilos predeterminados -->
    <link rel="stylesheet" href="<?= constant('base_url'); ?>css/reset.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.js"></script>
    <!-- Estilos css login -->
    <link rel="stylesheet" href="<?= constant('base_url'); ?>css/error.css">
    <!-- Base url para javascript -->
    <title>Error</title>
</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://png.pngtree.com/png-vector/20190521/ourlarge/pngtree-connectionerrorinternetlostinternet-line-icon-png-image_1058249.jpg" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="mb-4">
                        <h1 class="mt-4 h1 text-center"><i class="fas fa-exclamation-triangle"></i> <?= $this->mensaje; ?>. <i class="fas fa-exclamation-triangle"></i></h1>
                    </div>
                    <div>
                        <p class="fs-5 text-center">Ah ocurrido un error y no se ah podido cargar el recurso.</p>
                        <p class="fs-5 text-center">Verifique que los datos ingresados sean los correctos.</p>
                        <div style="text-align: center;">
                            <a class="btn btn-danger mt-3 mb-5" href="<?= constant('base_url'); ?>login/close">Regresar al inicio<i class="icon-return fas fa-undo"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>