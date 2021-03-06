<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Un Dia Sin Problemas</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/app.css">
</head>
<body>
	  <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#" title="Logo de la Pagina"><img src="static/images/logo_un.png" height="30" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-sm-flex justify-content-end" id="navbarNavAltMarkup"
        style="background-color: #43B1B4;" height="30" alt="">
            <div class="navbar-nav">

                <a class="nav-item nav-link" data-toggle="modal" data-target="#exampleModalCenterRegister"
                    href="#" title="Boton Registrate" style="color: white"><b>Registrarse</b></a>
              
                <div class="modal fade" id="exampleModalCenterRegister" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content border-0">
                                <div class="modal-header text-white" style="background-color: #43B1B4;">
                                <h5 class="modal-title" id="exampleModalLongTitle">Registrate en Un dia sin problemas</h5>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmailRegister">Correo electrónico</label>
                                        <input type="email" class="form-control" id="exampleInputEmailRegister"
                                            aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUserRegister">Nombre de usuario</label>
                                        <input type="text" class="form-control" id="exampleInputUserRegister"
                                            placeholder="Ingrese un nombre de usuario">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPasswordRegister">Contraseña</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordRegister"
                                            placeholder="Ingrese una contraseña">
                                    </div>
                                </form>
                                <small class="form-text text-muted">Estoy de acuerdo con los <a href="#">Terminos de
                                        uso</a> y la <a href="#">Politica de Privacidad</a> de Un dia sin problemas</small>
                            </div>
                            <div class="modal-footer">
                                <a href="perfil.php" type="button" class="btn btn-primary">Registrarse</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="nav-item nav-link" data-toggle="modal" data-target="#exampleModalCenterLogin" href="inicio.php" title="Boton Iniciar Sesión"
                style="color: white"><b>Iniciar sesión</b></a>


                <div class="modal fade" id="exampleModalCenterLogin" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content border-0">
                                <div class="modal-header text-white" style="background-color: #43B1B4;">
                                <h5 class="modal-title" id="exampleModalLongTitle">Inicia sesión en Un dia sin problemas</h5>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmailLogin">Correo electrónico</label>
                                        <input type="email" class="form-control" id="exampleInputEmailLogin"
                                            aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico">
                                        <small id="emailHelp" class="form-text text-muted">No compartiremos su correo
                                            electrónico con nadie.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPasswordLogin">Contraseña</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordLogin"
                                            placeholder="Ingrese su contraseña">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <a href="inicio.php" type="button" class="btn btn-primary">Iniciar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </nav>

    <div class="index-row1">

        <div class="container">

            <div class="row my-3 pt-lg-3 my-lg-0">

                <div class="col-lg my-auto">

                    <h5 class="text-center text-lg-left mb-lg-3 mb-3">

                        <div class="mb-2">Somos una aplicación que te ayudará a organizarte día día...
                        </div>
                        <small class="text-muted">Gracias que nuestra pagina te propone planes que te ayudarán a seleccionar el tipo de agenda para ti.
                        </small>

                        </h3>

                </div>

                <div class="col-lg mt-3 mb-2 my-lg-0">

                    <a target="_blank" href="static/images/agenda.jpg"><img class="d-block mx-auto" src="static/images/agenda.jpg" title="Agenda" width="90%"alt="agenda de imagen"></a>

                </div>

            </div>

        </div>

    </div>

    <div class="index-row2">

        <div class="container">

            <div class="row my-lg-5">

                <div class="col-lg-7 order-lg-last my-lg-auto text-lg-left text-center pl-lg-4">

                    <h5 class="mb-3">Tu vida será más fácil.</h5>
                    <p class="my-4">Ya que te brindaremos estas opciones que te ayudarán que la organización sea cada vez más fácil. <a class="color-pag" href="#">Saber más</a> </p>

                    <p class="font-weight-bold">ORGANIZA TUS IDEAS...</p>

                    <ul class="list-group">

                        <li class="list-group-item">

                            <i class="fas fa-book"></i>
                            <p class="d-inline"> Escribiendo tus notas.</p>

                        </li>

                        <li class="list-group-item">

                            <i class="fas fa-calendar"></i>
                            <p class="d-inline"> Consigue organizar tu dia a dia.</p>

                        </li>

                    </ul>

                </div>

                <div class="col-lg order-lg-first my-4 my-lg-0">

                    <a target="_blank" href="static/images/2.jpg"><img class="d-block mx-auto" src="static/images/2.jpg" title="Agenda 2" width="100%" alt="libros"></a>

                </div>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>